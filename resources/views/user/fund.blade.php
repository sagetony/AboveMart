@include('user.head')
@include('user.header')
@include('user.sidebar')
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>


<div id="content" class="app-content p-0">

<div class="profile">
<div class="profile-header">

<div class="profile-header-cover"></div>


<div class="profile-header-content">

<div class="profile-header-img">
<img src="{{ auth()->user()->photo }}" alt="" />
</div>


<div class="profile-header-info ">
<h4 class="mt-0 mb-1"> {{ auth()->user()->firstName }} {{ auth()->user()->lastName }}</h4>
<p class="mb-2">{{ auth()->user()->rank }}</p>

</div>
</div>


</div>
</div>


<div class="profile-content">

<div class="tab-content p-0">




<div class="tab-pane fade show active" id="profile-about">

<div class="table-responsive form-inline">
<table class="table table-profile align-middle">
<thead>
<tr>
<th></th>
<th>
<h4> Deposit</small></h4>
</th>
</tr>
</thead>
<tbody>
<form action="{{ route('pay') }}" method="post">
@csrf

<tr class="highlight">
<td class="field">Email</td>
<td ><a href="javascript:;" class="text-decoration-none fw-bold"><input class="form-control" type="email" name ="email" placeholder="Enter Email Address" style="width:84%;"></a></td>
</tr>
<tr class="highlight">
<td class="field">Amount</td>
<td ><a href="javascript:;" class="text-decoration-none fw-bold"><input class="form-control" type="text" name ="amount" placeholder="Enter Amount" style="width:84%;"></a></td>
</tr>

<tr class="divider">
<td colspan="2"></td>
</tr>
<tr class="highlight">
<td class="field">&nbsp;</td>
<td class="">
<button type="submit" class="btn btn-primary w-150px">Fund Wallet</button>
</td>
</tr>
</form>
</tbody>
</table>
</div>

</div>

</div>


</div>
</div>

</div>

</div>

</div>

</div>

</div>

@include('user.footer')