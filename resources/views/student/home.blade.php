@extends('main')
@section('title','Home')
@section('contete2')
<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Ticket Content</th>
				<th>Date</th>
				<th>State</th>
				<th>Type</th>
			</tr>
		</thead>
		<tbody>
			<tr>
        
				<td>John</td>
				<td>Doe</td>
				<td>john@example.com</td>
				<td>john@example.com</td>
				<td>john@example.com</td>
			</tr>
			<tr>
				<td>Mary</td>
				<td>Moe</td>
				<td>mary@example.com</td>
				<td>john@example.com</td>
				<td>john@example.com</td>
			</tr>
			<tr>
				<td>July</td>
				<td>Dooley</td>
				<td>july@example.com</td>
				<td>john@example.com</td>
				<td>john@example.com</td>
			</tr>
		</tbody>

	</table>
<section class="ftco-services ftco-no-pb">
  <div class="container-wrap">
    <div class="row no-gutters">
      <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-teacher"></span>

            <div class="media-body p-2 mt-3">
              <a href="#"> <button type="button" class="btn">
                  <h3 class="heading"> Advise on social problem </h3>
                </button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-reading"></span>

            <div class="media-body p-2 mt-3">
              <a href="#"><button type="button" class="btn">
                  <h3 class="heading"> Advise study plan </h3>
                </button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-books"></span>

            <div class="media-body p-2 mt-3">
              <a href="#"><button type="button" class="btn">
                  <h3 class="heading"> Advise about course </h3>
                </button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="glyphicon glyphicon-envelope"></span>

            <div class="media-body p-2 mt-3">
              <a href="#"><button type="button" class="btn">
                  <h3 class="heading"> send a massage! </h3>
                </button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection