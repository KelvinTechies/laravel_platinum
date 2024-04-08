  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
          <div class="card-header p-3 pt-2">

              <div class="text-en pt-1 obj-flex">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl">
                      <i class="material-icons opacity-10">attach_money</i>
                  </div>

                  <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">{{ Auth::user()->acct_num }}</p>
                      <h4 class="mb-0">$941,220,010.00</h4>
                      <p class="text-sm mb-0"><span class="text-success text-sm font-weight-bolder">+15%
                          </span>interest daily</p>
                      <p class="text-sm mb-0 text-success font-weight-bolder">Active</p>
                  </div>
              </div>

          </div>

      </div>
  </div>

  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">

      <div class="card">
          <div class="card-header p-3 pt-2">

              <div class="text-en pt-1 obj-flex">
                  <div class="avatar avatar-xl position-relative">
                      <img src="./assets/img/jason-statham.jpg" alt="profile_image"
                          class="w-100 border-radius-lg shadow-sm">
                  </div>

                  <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">{{ Auth::user()->occupation }}</p>
                      <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                      <p class="text-sm mb-0">{{ Auth::user()->email }}</p>

                      <p class="text-sm mb-0 text-capitalize">{{ Auth::user()->state }},
                          {{ Auth::user()->country }}.</p>
                  </div>
              </div>

          </div>
      </div>
  </div>

  <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">

      <div class="card">

          <div class="card-header p-3 pt-2">

              <div class="text-en pt-1">
                  <form role="form" onsubmit="Trasnsfer(event)" class="text-start">
                      <div class="input-group input-group-outline my-2">
                          <label class="form-label">Your Account Number</label>
                          <input type="number" class="form-control  transferField">
                      </div>

                      <button class="withdraw transfer" id="open-popup">
                          <span>Transfer</span>
                      </button>
                  </form>
              </div>

          </div>

      </div>

  </div>
  {{-- <div class="overlay" id="overlay">
      <div class="spinner" id="spinner">Loading...</div>
  </div>

  <script>
      const transferInput = document.getElementsByClassName("transfer")[0];

      const Trasnsfer = (e) => {
          e.preventDefault();

          const transferField = document.querySelector('.transferField')
          if (transferField.value === "") {
              alert("Field must not be empty")
          } else if (transferField.value <= 0) {
              alert("Please insert a reasonable Account Number")
          } else {
              showSpinner()

              setTimeout(() => {
                  hideSpinner()
              }, 7000);


          }
      };

      // Show spinner
      function showSpinner() {
          document.querySelector("#open-popup")

          document.getElementById('spinner').style.display = 'block';
      }

      // Hide spinner
      function hideSpinner() {
          document.getElementById('spinner').style.display = 'none';
      }
  </script>
 --}}
