<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Image;
use App\Orders;
use App\Product;
use App\Provinces;
use App\Districts;
use App\Wards;
class CheckOutController extends Controller
{
    public function show($id,Request $request){
        $tinh_thanhpho = DB::table('provinces')->get();
        $data=Orders::find($id);

        return view('page.order')->with('data',$data)->with('tinh_thanhpho',$tinh_thanhpho);
     }
     public function update(Request $request){
        $data3=Orders::find($request->input('id'));
        $province =Provinces::where('province_id',$request->input('province_id'))->get();
        $district =Districts::where('district_id',$request->input('district_id'))->get();
        $ward =Wards::where('ward_id',$request->input('ward_id'))->get();
        $address= $request->input('address').' '.$province[0]->type.' '.$province[0]->name.', '.$district[0]->type.' '.$district[0]->name.', '.$ward[0]->type.' '.$ward[0]->name;
        $data3->ten_khach_hang = $request->input('ten_khach_hang');
        $data3->email = $request->input('email');
        $data3->so_dien_thoai = $request->input('so_dien_thoai');
        $data3->province_id =  $request->input('province_id');
        $data3->district_id =  $request->input('district_id');
        $data3->ward_id =  $request->input('ward_id');
        $data3->address =  $request->input('address');
        $data3->location = $address;
        $data3->save();
        return redirect('/orderSuccess/view/'.$data3->id);
     }
     public function getQuanHuyen($id_tinh_thanhpho){

		$quan_huyen = DB::table('districts')->where('province_id','=',$id_tinh_thanhpho)->get();
		$hien_thi_quan_huyen = '<select required name="district_id" class="nice-select wide" onchange="ajaxQuanHuyen(this.value)">';
		$count = true;
		foreach($quan_huyen as $qh){
			if($count){
				$hien_thi_quan_huyen .= '<option data-display="'.$qh->name.'" value="'.$qh->district_id.'">'.$qh->name.'</option>';

			}
			else
				$hien_thi_quan_huyen .= '<option value="'.$qh->district_id.'">'.$qh->name.'</option>';
		}
		$hien_thi_quan_huyen .= '</select>';

		$hien_thi_xa_phuong = '<select id="selec_addres" class="required" required>
		</select>';

		$tra_ve = array();
		$tra_ve[0] = $hien_thi_quan_huyen;
		$tra_ve[1] = $hien_thi_xa_phuong;
		return $tra_ve;
	}
	public function getXaPhuong($id_quan_huyen){
		$xa_phuong = DB::table('wards')->where('district_id','=',$id_quan_huyen)->get();
		$hien_thi_xa_phuong = '<select required name="ward_id" class="nice-select wide">';
		$count = true;
		foreach($xa_phuong as $xp){
			if($count){
				$hien_thi_xa_phuong .= '<option data-display="'.$xp->name.'" value="'.$xp->ward_id.'">'.$xp->name.'</option>';

			}
			else
				$hien_thi_xa_phuong .= '<option value="'.$xp->ward_id.'">'.$xp->name.'</option>';
		}
		$hien_thi_xa_phuong .= '</select>';
		return $hien_thi_xa_phuong;
	}

}
