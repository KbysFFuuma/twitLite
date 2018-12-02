@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<!-- 左サイド -->
		<aside class="col-md-3.5 col-md-offset-2.5">
				@include('layouts.userProfile')
		</aside>

		<!-- 設定画面を表示 -->
		<section class="main-content col-md-6 col-md-offset-1 hidden-md">
			<article class="setting">
				@include('layouts.setting')
			</article>
		</section>
	</div>
</div>

@endsection
