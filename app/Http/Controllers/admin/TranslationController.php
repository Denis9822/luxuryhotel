<?php

namespace App\Http\Controllers\admin;
use App\Helpers\Translit;
use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Book;
use App\Models\Book_keywords;
use App\Models\Inspiration;
use App\Models\Keyword;
use App\Models\Localization;
use App\Models\Order;
use App\Models\Text;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use QrCode;
use PDF;
class TranslationController extends Controller
{

    public function index(Request $rq)
    {
        $values = Block::orderBy('id','desc')->get();
        return view('admin.translation.index',compact('values'));
    }

    public function edit(Request $rq,$id)
    {
        $value = Block::with('text')->findOrFail($id);
        $langs = Localization::all();

        if ($rq->post())
        {
            if ($rq->text_id != '')
                $value = Text::find($rq->text_id);
            else
                $value = new Text();

            $value->text = $rq->text;
            $value->lang = $rq->lang;
            $value->block_id = $id;
            $value->save();

            return redirect()->refresh();
        }
        return view('admin.translation.edit',compact('value','langs'));
    }
    public function add(Request $rq)
    {
        if ($rq->post())
        {
            $value = new Block();
            $value->name = $rq->name;

            $value->save();

            return redirect()->route('admin.translation.index')->with(['edit'=>'Данные добавленны']);
        }

        return view('admin.translation.add');
    }
    public function remove(Request $rq,$id)
    {
        $key = Inspiration::findOrFail($id);
        $key->delete();
        return redirect()->route('admin.city.index');
    }
}
