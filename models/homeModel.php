<?php
class homeModel {
    public function showsp($dssp_banchay) {
        // Giả sử có một số logic để truy vấn hoặc xử lý dữ liệu
        $html_banchay="";
        foreach ($dssp_banchay as $sp) {
            extract($sp);
            $html_dssp_banchay.='<li>
            <div class="card" style="width:250px;height: 370px;">
                <img class="card-img-top" src="views/asset/img/product/'.$anh.'" alt="Card image">
                <div class="card-body">
                    <span class="mb-3 " style="font-size: 20px; color:red;">'.$dongia.'</span> 
                    <h4 class="card-title fs-6 text-secondary " style="font-size: 15px;margin-top:10px">La-Roche</h4>
                    <span class="fs-5">'.$ten_sp.'</span>
                </div>
            </div>
        </li>';
        }
        return $html_banchay;
    }
    
}
?>