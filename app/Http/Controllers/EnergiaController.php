<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Energia;
//use App\User;

class EnergiaController extends Controller
{
    public function salvar($id, $valor){
        $dia = date('d');
        $mes = date('m');
        $ano = date('Y');

        $energia = new Energia;
        $energia->valor = 0.00251542;
        $energia->user_id = $id;
        $energia->dia = $dia;
        $energia->mes = $mes;
        $energia->ano = $ano;

        if($energia->save()){
            echo "Salvo_com_sucesso";
        }else{
            echo "Erro_ao_salvar";
        }

    }
    public function filtrar(Request $request){
    	$user = auth()->user();
	   	$mes = $request->input('valor');
        $ano = date('Y');
        $dataF = date('d/m/Y');

        for($i=0;$i<=30;$i++){
            $dia[$i]=0.0;
        }

        $energias = Energia::all()->where('user_id', '=', $user->id)->where('mes', '=', $mes)->where('ano', '=', $ano);

        foreach ($energias as $energia) {
            if($energia->dia == 1){
                $dia[0] += $energia->valor;
            }elseif($energia->dia == 2){
                $dia[1] += $energia->valor;
            }elseif($energia->dia == 3){
                $dia[2] += $energia->valor;
            }elseif($energia->dia == 4){
                $dia[3] += $energia->valor;
            }elseif($energia->dia == 5){
                $dia[4] += $energia->valor;
            }elseif($energia->dia == 6){
                $dia[5] += $energia->valor;
            }elseif($energia->dia == 7){
                $dia[6] += $energia->valor;
            }elseif($energia->dia == 8){
                $dia[7] += $energia->valor;
            }elseif($energia->dia == 9){
                $dia[8] += $energia->valor;
            }elseif($energia->dia == 10){
                $dia[9] += $energia->valor;
            }elseif($energia->dia == 11){
                $dia[10] += $energia->valor;
            }elseif($energia->dia == 12){
                $dia[11] += $energia->valor;
            }elseif($energia->dia == 13){
                $dia[12] += $energia->valor;
            }elseif($energia->dia == 14){
                $dia[13] += $energia->valor;
            }elseif($energia->dia == 15){
                $dia[14] += $energia->valor;
            }elseif($energia->dia == 16){
                $dia[15] += $energia->valor;
            }elseif($energia->dia == 17){
                $dia[16] += $energia->valor;
            }elseif($energia->dia == 18){
                $dia[17] += $energia->valor;
            }elseif($energia->dia == 19){
                $dia[18] += $energia->valor;
            }elseif($energia->dia == 20){
                $dia[19] += $energia->valor;
            }elseif($energia->dia == 21){
                $dia[20] += $energia->valor;
            }elseif($energia->dia == 22){
                $dia[21] += $energia->valor;
            }elseif($energia->dia == 23){
                $dia[22] += $energia->valor;
            }elseif($energia->dia == 24){
                $dia[23] += $energia->valor;
            }elseif($energia->dia == 25){
                $dia[24] += $energia->valor;
            }elseif($energia->dia == 26){
                $dia[25] += $energia->valor;
            }elseif($energia->dia == 27){
                $dia[26] += $energia->valor;
            }elseif($energia->dia == 28){
                $dia[27] += $energia->valor;
            }elseif($energia->dia == 29){
                $dia[28] += $energia->valor;
            }elseif($energia->dia == 30){
                $dia[29] += $energia->valor;
            }elseif($energia->dia == 31){
                $dia[30] += $energia->valor;
            }
        }

        $consumo = 0;
        $consumoPIS = 0;
        $consumoCONFINS = 0;
        $consumoICMS = 0;
        $total = 0;

        foreach($dia as $d){
            $consumo = $consumo + $d;
        }

        $consumo = round ($consumo, 2);

        if($consumo > 38.08){
            $consumoICMS = ($consumo * 0.27);
            $consumoICMS = round ($consumoICMS, 2);
        }

        $consumoPIS = ($consumo * 0.0135);
        $consumoPIS = round ($consumoPIS, 2);

        $consumoCONFINS = ($consumo * 0.0616);
        $consumoCONFINS = round ($consumoCONFINS, 2);

        $total = $consumo+$consumoCONFINS+$consumoPIS+$consumoICMS;


        return view('home', ['user' => $user, 'mes' => $mes, 'dia' => $dia, 'consumo'=>$consumo, 'data'=>$ano, 'dataF'=>$dataF, 'consumoICMS'=>$consumoICMS, 'consumoPIS'=>$consumoPIS, 'consumoCONFINS'=>$consumoCONFINS, 'total'=>$total]);
    }
}
