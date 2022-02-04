<?php

use App\Http\Controllers\BfdController;
use App\Http\Controllers\GitoutController;
use App\Http\Controllers\GoController;
use App\Http\Controllers\NextController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RawController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
-- Add new Curad Sustem
* Add Routes (
    - Resourses['index'- 'create' - 'show' - 'edit' - 'update' ,'destory']
    - in index (we will put empyt), (and we will put css, jvs from table pg and we wlii choes table ,
     we will go to pg web to add a new route )
    after that we will add controller (php artisan make:controller NextController -r(name)of controll),
     after thet we will go admincontroller and we will do  return view (name of pg.indxe) in the index
    and in main-sidebar we will make route, and we will call the controlle form the web pg after that we will make bottem in the index pg (in the table aria)
    ----------------------------------------------------------------------------

    in create pg(will put the model from botsterab aftar thet
     we will do form and in side we make {{route(post.store)}} in the model bady(all the colum(name ,phoen)it will go for data base, "<form action="{{route('next.store')}}" method="post">
      and  betwen the form we wiil pot all the colums,
      anlike we will mamk <div class="row">
      and <div class="col">
      and <labal></labal>
      and inpot -> class="form-control" علشان يكون شكل ال inpou كويس    name="", required for ache colum ماعدا الملاحظات من غير (required)
      and we will pot the class="modal-footer">  with the bottem اغلاق و حذفin side the form
      </div>
      </div>
      aftar that we do  @include('gitout.create') in the index pg عند بوتم اضافه
     <button class="btn  btn-success"  data-toggle="modal" data-target="#exampleModal">اضافه</button>

     aftar that we make(php artisan make:model Next -m)
      and in migration we create the tabels like that($table->string('name');
      aftar that go to model pg to mike

      use HasFactory;
    protected $fillable =[
        'name',
        'price',
        'address',
        'notes',

    ];
     and aftar that we sand to the data baes (php artisan migrate)
      aftar that we go to controller pg to add nwe data
  public function store(Request $request)
    {

            $news= new Gitout();
            $news->name= $request->name;
            $news->price= $request->price;
            $news->address=$request->address;
            $news->notes=$request->notes;
            $news->save();
            return back();



      ------------------------------------------------------------------------------------

      -IN edit pg(we put the create pg , and we go to index pg and we will edit the bottem edit by botin -> (data-toggle="modal" data-target="#create"),
      and we will chaning the data-target part by giving name like this (data-target="#edit{{$next->id}}")
      and we make @include('NEXT.edit') here name of pg. edit , farst we edit the model id
      and we edit the route (name of route .update , and we wlii giv any mame, and outocomplete="off"),
      and we make   @method('PUT')
      aftar that we make inpout haden ->( <input type="hidden" name="id" value="{{$next->id}}">)
    and we edit ache required to -> name="name" value="{{$next->name}}
    ماعدا text with out name="name" value jast "{{$next->name}} this
aftar that in the controler wi take the store copy to update Modesl,
 and we edit new Next(); to Next::findorfail($request->id);
 aftar that we edid in controller
  public function index()
    {

        $giyouts = Gitout::all();
        return view('gitout.index',compact('giyouts'));
        and we go to indxe pg
                                        @foreach ($giyouts as $giyout )



                                <tr>
                                    <td>1</td>
                                    <td>{{$giyout->name}}</td>
                                    <td>{{$giyout->price}}</td>
                                    <td>{{$giyout->address}}</td>
                                    <td>{{$giyout->notes}}</td>

                                    <td>



                                        <button class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#edit{{ $giyout->id }}">>تعديل</button>
                                        <button class="btn btn-danger btn-sm">حذف</button>

                                    </td>
                                    @include('gitout.edit')
                                </tr>

                                @endforeach





---------------------------------------------------------------------------------------

IN deleted pg (we put the edit pg , and we go to index pg to edit the  bottem edit  by botin -> (data-toggle="modal" data-target="#create"),
  and we will chaning the data-target part by giving name like this (data-target="#delete{{$next->id}}")
        and we make @include('NEXT.delete') here name of pg. delete , farst we edit the model id
 )and we edit the route (name of route .destroy,  and we wlii giv any mame, and outocomplete="off
 @method('DELETE') aftar that in the farst inpout we do that (name="name" readonly value="{{$next->name}}">)
 and in the controler pg we make that
  public function destroy(Request $request)
    {
        $new =  Next::findorfail($request->id)->delete();
        return back();
))
)

* Add Controller (
    - index ($post = Model Name ::all() -> reutern views)
    - create (Add Pig Data - >return views)
    - Stores - Update - destory - show - edit
)

* Modesl + Migration (
    - php artisan make:model -m      ex. php artisan make:Post -m
    - migration (
        * $table->string('name')->max(255);
        * $tabe->text('notes');
        * $table->decmile('price',8,2);
        * $table->integer('price')->max(12345678910111);
    )
    - Model - protected $fillable = [
        'name',
        'phone',
    ];
)

* Pages views (
    - index
    - create
    - edit
    - deleted
)
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post', PostController::class);
Route::resource ('go',GoController::class );
Route::resource('next',NextController::class);
Route::resource('gitout',GitoutController::class);
Route::resource('bfd',BfdController:: class);
Route::resource('raw',RawController::class);

Route::get('/{page}', 'AdminController@index');
