 <!-- Portfolio Modal 2-->
 <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2"
     aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <div class="modal-content">
             <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                     aria-label="Close"></button></div>
             <div class="modal-body text-center pb-5">
                 <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-lg-8">
                             <!-- Portfolio Modal - Title-->
                             <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Мой друг</h2>
                             <!-- Icon Divider-->
                             <div class="divider-custom">
                                 <div class="divider-custom-line"></div>
                                 <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                 <div class="divider-custom-line"></div>
                             </div>
                             
                             @if ($friends == 0)
                             <!-- Portfolio Modal - Image-->
                             <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />
                             <!-- Portfolio Modal - Text-->

                             <p class="mb-4">Ты еще не выбрал своего тайного друга</p>

                             @else
                             <img class="img-fluid rounded mb-5" src="uploads/avatars/{{ $friends->avatar}}" alt="..." />
                                       <!-- Portfolio Modal - Text-->
                                      <p class="mb-4"> Имя: {{ $friends->name}}</p>
                                     <p class="mb-4">Интересы  твоего друга: {{ $friends->hobbies}}</p>

                             @endif





                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
