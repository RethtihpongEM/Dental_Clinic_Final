@if (session()->has('message'))
	<div style="background-color: #4F9298" x-data="{show:true}" x-init="setTimeout(()=>show = false,3000)" x-show="show"  class="fixed top-0 left-1/2 transform -translate-x-1/2 text-white px-48 py-3">
		<p>
			{{session('message')}}
		</p>
	</div>
@endif