<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function create(Request $request){
        if($request->ajax()){
            $new = (new Promo())->fill($request->all());
            $code = $this->generateCode();
            $new->code = $code;
            $save = $new->save();

            if($save){
                $this->createQr($code);
                $url = $this->getUrl($code);
                return response()->json([
                    'succes' => true,
                    'url' => $url,
                    'msg' => 'Agregado correctamente'
                ]);
            }else{
                return response()->json([
                    'msg' => 'Error al agregar'
                ]);
            } 
        }  
    }

    public function update(Request $request){
        if($request->ajax()){
            $result = Promo::find($request->id);
            $result->fill($request->all());
            $result->status = 1;
            $result->save();
            return response()->json([
                'succes' => true,
                'msg' => 'Guardado'
            ]);
        }
    }

    public function createQr($code){
        $url = route('apply.code', ['code' => $code]);
        return QrCode::margin(5)->format('png')->size(500)->generate($url,'../public/qrcode/qrcode-'.$code.'.png');
    }

    public function generateCode(){
        $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($pattern);
        $random_string = '';
        for($i = 0; $i < 6; $i++) {
            $random_character = $pattern[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }

    public function getUrl($code){
        return route('download.qr',['code' => $code]);
    }

    public function downloadQr($code){
        $path = public_path().'/qrcode/qrcode-'.$code.'.png';
        $name = 'qrcode-'.$code.'.png';
        $headers = ['Content-Type: image/png'];
        return response()->download($path, $name, $headers);
    }

    public function applyCode($code){
        $promo = Promo::where('code', $code)->first();
        return view('getdata', ['promo' => $promo]);
    }
}
