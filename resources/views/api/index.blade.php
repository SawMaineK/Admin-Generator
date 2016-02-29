@extends('layouts.app')
@section('header_styles')
<link href="{{ asset('admin/stylesheets/pretty-json.css') }}" media="all" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <div class="container">

        <div class="page-title">
          <h1>
            APIs List of Model
          </h1>
        </div>
        <div class="row">
          <!-- FAQ Nav -->
          <div class="col-sm-3">
            <ul class="list-group">
                @include('api.list')
            </ul>
          </div>
          <div class="col-sm-9">
            <div class="tab-content">
            @include('api.model')
              
            </div>
          </div>
        </div>

    </div>

@endsection

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')

    <script src="{{ asset('admin/javascripts/underscore-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/javascripts/backbone-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/javascripts/pretty-json-min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        var data = {
            name:'John Doe',
            age: 20,
            children:[{name:'Jack', age:5}, {name:'Ann', age:8}],
            wife:{name:'Jane Doe', age:28 }
        };

        /*try{ data = JSON.parse(json); }
        catch(e){ 
            alert('Not Valid JSON');
            return;
        }*/
        var node = new PrettyJSON.view.Node({ 
            el:$('blockquote p'),
            data: data,
            dateFormat:"DD/MM/YYYY - HH24:MI:SS"
        });
    </script>

@stop


