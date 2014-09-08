@section('content')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            @foreach($projects as $project)
            <li><a href="/Home/{{$project->id}}">{{$project->name}}</a></li>
            @endforeach
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">
          @if(isset($oneproject))
          {{$oneproject->name}}
          @else
          Choose Project
          @endif
          </h1>

          @if(isset($oneproject))
          {{$oneproject->description}}
          @else
          <p>Demo to display ideas for the Jira REST API</p>
          @endif
          <div class="row placeholders">
            @if(isset($oneproject))
              <div class="col-xs-12 col-sm-12">
                <h2 class="sub-header">Section title</h2>
                <div id="linechart6"></div>
              </div>
          </div>

          <div class="row">
			  <div class="col-xs-6 col-sm-6">
		          <h2 class="sub-header">components<span class="pull-right">({{count($oneproject->components)}})</span></h2>
              <table class="table table-hover">
                <thead>
                  <th>Component Name</th>
                </thead>

		         @foreach($oneproject->components as $project)
              <tr>
               <td>{{$project->name}}</td>
              </tr>
             @endforeach

           </table>
	          </div>
	          <div class="col-xs-6 col-sm-6">
		          <h2 class="sub-header">issue types<span class="pull-right">({{count($oneproject->issueTypes)}})</span></h2>
              <table class="table table-hover">
                <thead>
                  <th>issue types name</th>
                </thead>

              @foreach($oneproject->issueTypes as $project)
              <tr>
               <td>{{$project->name}}</td>
              </tr>
              @endforeach

              </table>
	          </div>


        </div>
        <div class="row">
      <div class="col-xs-6 col-sm-6">
            <h2 class="sub-header">versions<span class="pull-right">({{count($oneproject->versions)}})</span></h2>
            <table class="table table-hover">
              <thead>
                <th>Version Name</th>
              </thead>

           @foreach($oneproject->versions as $project)
            <tr>
             <td>{{$project->name}} </td>
            </tr>
           @endforeach

         </table>
          </div>

       </div>

      </div>
        @endif
      </div>
    </div>

@stop
@section('footer')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="/js/docs.min.js"></script>
    <script src="/bower_resources/highcharts/highcharts.js"</script>
	<script src="/bower_resources/highcharts//modules/data.js"</script>
@if(isset($oneproject))
<script type="text/javascript">
 $(function () {
    $('#linechart6').highcharts({
        chart: {
          backgroundColor: '',
            type: 'pie'
        },
        title: {
            text: ''
        },
        xAxis: {
            categories:['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: ''
            }
        },
         plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true
                    },
                    showInLegend: true
                }
            },
        series:[{
       data:[
                ['issueTypes',{{count($oneproject->issueTypes)}}],
                ['components',{{count($oneproject->components)}}],
            ]
        }]
    });
})
</script>
@endif
@stop
