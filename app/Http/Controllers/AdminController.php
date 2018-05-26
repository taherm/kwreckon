<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;
use App\Menu;


class AdminController extends Controller
{
    

    public function index()
    {
        $ser=Service::all();
        return view('admin.index',compact('ser'));
    }

    public function delete_slider()
    {
       
        Slider::where('image',request('image'))->delete();

        return redirect('/admin/delete-slider');
    }
    public function add_slider()
    {
        $slide=new Slider;
        $temp=request('image');
        $filename='img/slider/'.$temp;
        $slide->image=$filename;
       
        $slide->save();
        return redirect('/admin');
    }


    public function submenu()
    {
       
         $menu=new Menu;
         $menu->title=request('title');
         
        $menu->parent_id=Menu::where('title',request('submenu'))->first()->id;
        
         
         $menu->url="menu/".request('title');
         $menu->save();
        //$temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
        //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
         //dd(request()->all());
         return redirect('/admin');
    }

    public function mainmenu()
    {
       
         $menu=new Menu;
         $menu->title=request('title');
         
        $menu->parent_id='0';
        $menu->url="menu/".request('title');
         $menu->save();
        //$temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
        //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
         //dd(request()->all());
         return redirect('/admin');
    }


    public function edit($id)
    {
        $serv=Service::find($id);
        return view('admin.edit',compact('serv'));
    }

    public function update($id)
    {
        //dd('stopo here');
        $this->validate(request(),[
        'title'=>'required',
        'description'=>'required',
        'image'=>'required'
         ]);
        
        $serv=Service::find($id);
        $fn=$serv->title;
        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        
        $menu=Menu::where('title',"=",$fn)->first();
        $menu->title=request('title');
        $menu->url="services/menu/".$serv->title;
$menu->save();
        $serv->save();
        //File::move("C://xampp/htdocs/pim/resources/views/services/".$fn.'.blade.php',"C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php');
        //dd(request()->all());
        return redirect('/admin');
    }


    public function store()
    {
    
    $this->validate(request(),[
       'title'=>'required',
       'description'=>'required'
       
        ]);
   
     // $temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
       

    
       // File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
        $serv=new Service;
        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        $serv->save();
    
    //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php','John Doe is a good boy');


    $menu=new Menu;
    $menu->title=request('title');
    if (isset($_POST['menu'])) {
        $menu->parent_id='0';
        // Checkbox is selected
    } else {
        $menu->parent_id=Menu::where('title',request('submenu'))->first()->id;
    }
    
   // $menu->url=request('url');
   $menu->url="services/menu/".request('title'); 
   
   $menu->save();

    //dd(request()->all());
    return redirect('/admin');
    }

    public function destroy($id)
    {
        
        $serv=Service::find($id);
        $menu=Menu::where('title',"=",$serv->title)->first();
        //$temp=$menu->title;
        //File::delete("C://xampp/htdocs/pim/resources/views/services/".$temp.'.blade.php');
        $menu->delete();
        
        $serv->delete();
        
        return redirect('/admin');
    }

    public function del()
    {
       $menu= Menu::where('title',request('submenu'))->first();
       //$temp=$menu->title;
      // File::delete("C://xampp/htdocs/pim/resources/views/services/".$temp.'.blade.php');
        
       Menu::where('title',request('submenu'))->delete();
    return redirect('/admin');
    }





}
