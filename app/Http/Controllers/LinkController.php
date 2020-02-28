<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Link;
function getId($res){
    return ($res->id);
}
$GLOBALS['domain'] = 'shortener.peresvet47.ru';
function makeUrl($id){
    return 'http://'.$GLOBALS['domain'] .'/api/linking/'.$id;
}

class LinkController extends Controller
{
    public function store (Request $link){

        $link = $link->link;
        $resultCheck = Link::where('link',$link)->first();
        if ($resultCheck){
            return makeUrl(getId($resultCheck));
        }else{
            $newLink = new Link();
            $newLink->link = $link;
            $newLink->save();

            $outPut = Link::where('link',$link)->first();
            $outPut = getId($outPut);
            return makeUrl($outPut);
        }
    }

    public function show (){
        $linkArray = Link::latest('id')->take(13)->get();
        foreach ($linkArray as $row){
            $link = makeUrl(getId($row));
            $row->link = $link;
        }
        return $linkArray->toJson();
    }
}
