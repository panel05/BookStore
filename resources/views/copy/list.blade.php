<h1>Példányok száma: {{$copies->count()}}</h1>
<h2>Kikölcsönözhető példányok száma: {{$copies->where('status', '0')->count()}}</h2> <!--'=' default beállítás, de egyébként bármilyen relációs jelet lehet használnii -->
<h3>Selejtezendő példányok száma: {{copies->where('status', '2')->count()}}</h3>
<h3>Selejtezendő példányok száma: {{copies->where('status', '1')->count()}}</h3>


@foreach($copies as $copy)
    <form action="/api/copies/{{$copy->copy_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$copy->copy_id}}">
        </div>
    </form>
@endforeach