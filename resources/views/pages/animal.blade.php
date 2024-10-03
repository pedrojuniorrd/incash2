@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Animais'])
    <!-- <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ auth()->user()->firstname ?? 'Firstname' }} {{ auth()->user()->lastname ?? 'Lastname' }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Public Relations
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
    <div class="row">
    <div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Animal</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Responsável</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sexo</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nota</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <!-- <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3"> -->
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Shico</h6>
                <p class="text-xs text-secondary mb-0">Cachorro</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Pedro</p>
            <!-- <p class="text-xs text-secondary mb-0">Organization</p> -->
          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">Macho</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">Não possui alergias</span>
          </td>
          <td class="align-middle">
            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Editar
            </a>
          </td>
        </tr>

        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <!-- <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3"> -->
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Nina</h6>
                <p class="text-xs text-secondary mb-0">Gata</p>
              </div>
            </div>
          </td>
          <td>
          <p class="text-xs font-weight-bold mb-0">Fred</p>
          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">Fêmea</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">Sem informações adicionais</span>
          </td>
          <td class="align-middle">
            <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Editar
            </a>
          </td>
        </tr>

        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <!-- <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3"> -->
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Charlotte</h6>
                <p class="text-xs text-secondary mb-0">Cavalo</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Guilherme</p>
          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">Fêmea</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold"></span>
          </td>
          <td class="align-middle">
            <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Editar
            </a>
          </td>
        </tr>

        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <!-- <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3"> -->
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Michel</h6>
                <p class="text-xs text-secondary mb-0">Cavalo</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0"></p>
            <p class="text-xs text-secondary mb-0">Guilherme</p>
          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">Macho</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">Sem informações adicionais</span>
          </td>
          <td class="align-middle">
            <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Editar
            </a>
          </td>
        </tr>

        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <!-- <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3"> -->
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Henrique</h6>
                <p class="text-xs text-secondary mb-0">Papagaio</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Carlos</p>
          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">Macho</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">Sem informações adicionais.</span>
          </td>
          <td class="align-middle">
            <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Editar
            </a>
          </td>
        </tr>

        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <!-- <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3"> -->
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Alice</h6>
                <p class="text-xs text-secondary mb-0">Gato</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">Fernanda</p>

          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">Fêmea</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">Sem informações adicionais</span>
          </td>
          <td class="align-middle">
            <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Editar
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

    </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
