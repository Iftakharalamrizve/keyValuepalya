public function do_apa_target_store(Request $request) {
       $upzila_app_id=$request->upozilla_app_id;
       $store_yearly_target=$request->yearly_target;


       for ($i = 0; $i <count($upzila_app_id); $i++){
        $arr = array(
            'yearly_target'=>$store_yearly_target[$i],
        );
        $find_col=Apa_for_upazilla::where('upa_apa_id',$upzila_app_id[$i])->update(['yearly_target'=>$store_yearly_target[$i]]);
       }
       
       return redirect()->back();
    }