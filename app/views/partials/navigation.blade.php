<ul class="navigation">
	<li>
		<a href="{{ URL::to('docs') }}" title="Overview of all documentations" class="@if(Request::is('docs*')) active @endif">Documentations</a>
	</li>
	<li>
		<a href="{{ URL::to('projects') }}" title="Overview of all projects" class="@if(Request::is('projects*')) active @endif">Projects</a>
	</li>
</ul>