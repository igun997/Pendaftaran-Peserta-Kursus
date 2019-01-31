@include("landing.theme.headless")
<div class="featured-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
					<h3 align="center" class="mb-30">{{ $title }}</h3>
					<form action="#" id="register" method="post" onsubmit="return false">
						<div class="mt-10">
							<input type="text" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required="" class="single-input">
						</div>
            <div class="mt-10">
              <input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="" class="single-input">
            </div>
            <div class="mt-10">
              <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
            </div>
            <div class="mt-10">
              <button type="submit" class="btn-block genric-btn success">
                Daftar
              </button>
            </div>
            <!-- genric-btn success -->
					</form>
			</div>
    </div>
  </div>
</div>
@include("landing.theme.foot")
