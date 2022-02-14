<?php
function UncreadMassages(){
    return App\Contact::where('status','1')->count();
   
}
