<section id="about" class="section">
<div class="container">
	<h4>{{$whoweare->title}}</h4>
	<div class="row">
		<div class="span4 offset1">
			<div>
				<h2>{{ $whoweare->subtitle ? isset($whoweare) : 'ABOUT' }}</h2>
				<p>
					{{ $whoweare->subtitle ? isset($whoweare) : 'euhirithuert ert ertiuherht' }}
				</p>
			</div>
		</div>
		<div class="span6">
			<div class="aligncenter">
				<img src="img/icons/creativity.png" alt="" />
			</div>
		</div>
	</div>

@php ($n=sizeof($staff))
	<div class="row">
		@for($i=0;$i<$n;$i++)
		<div class="span2 {{ $i%5==0 ? 'offset1' : '' }} flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="img/team/{{$staff[$i]->image}}" alt="" />
				<h3>{{$staff[$i]->name_surname}}</h3>
				<p>
					{{$staff[$i]->job}}
				</p>
			</div>
		</div>
		@endfor

	</div>
</div>
<!-- /.container -->
</section>
