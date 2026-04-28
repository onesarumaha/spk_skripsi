    <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <i
                                    class="typcn typcn-device-desktop menu-icon"
                                ></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{route('data-guru.index')}}"
                            >
                                <i
                                    class="typcn typcn-mortar-board menu-icon"
                                ></i>
                                <span class="menu-title">Data Guru</span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{route('kriteria.index')}}"
                            >
                                <i
                                    class="typcn typcn-mortar-board menu-icon"
                                ></i>
                                <span class="menu-title">Kriteria</span>
                            </a>
                        </li>
                          <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{route('penilaian')}}"
                            >
                                <i
                                    class="typcn typcn-mortar-board menu-icon"
                                ></i>
                                <span class="menu-title">Penilaian</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-toggle="collapse"
                                href="#ui-basic"
                                aria-expanded="false"
                                aria-controls="ui-basic"
                            >
                                <i
                                    class="typcn typcn-document-text menu-icon"
                                ></i>
                                <span class="menu-title">Perhitungan</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{route('saw.matrix')}}"
                                            > Matriks Keputusan</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{route('saw.normalisasi')}}"
                                            >Normalisasi</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{route('saw.rangking')}}"
                                            >Perangkingan</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </li>

                          <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{route('laporan.index')}}"
                            >
                                <i
                                    class="typcn typcn-mortar-board menu-icon"
                                ></i>
                                <span class="menu-title">Laporan</span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="nav-link btn btn-link w-100 text-left border-0 bg-transparent">
                                    <i class="typcn typcn-mortar-board menu-icon"></i>
                                    <span class="menu-title">Keluar</span>
                                </button>
                            </form>
                        </li>
                       
                      
                    </ul>
                </nav>
                <!-- partial -->