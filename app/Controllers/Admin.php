<?php

namespace App\Controllers;

use App\Models\M_Admin;

class Admin extends BaseController
{
    protected $m_admin;
    protected $m_kategori;
    protected $m_rak;
    protected $m_anggota;
    protected $m_buku;
    protected $m_peminjaman;

    public function __construct()
    {
        $this->m_admin = new M_Admin();
        $this->m_kategori = new \App\Models\M_Kategori();
        $this->m_rak = new \App\Models\M_Rak();
        $this->m_anggota = new \App\Models\M_Anggota();
        $this->m_buku = new \App\Models\M_Buku();
        $this->m_peminjaman = new \App\Models\M_Peminjaman();
    }

    public function login()
    {
        if (session()->get('ses_id') != "") {
            return redirect()->to(base_url('admin/dashboard-admin'));
        }
        return view('Backend/Login/login');
    }

    public function autentikasi()
    {
        $modelAdmin = new M_Admin();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cekUsername = $modelAdmin->getDataAdmin(['username' => $username])->getNumRows();

        if ($cekUsername == 0) {
            session()->setFlashdata('error', 'Username tidak ditemukan!');
            return redirect()->to(base_url('admin/login-admin'));
        } else {
            $dataUser = $modelAdmin->getDataAdmin(['username' => $username])->getRowArray();
            $passwordUser = $dataUser['password'];

            if (password_verify($password, $passwordUser)) {
                $sessionData = [
                    'ses_id'     => $dataUser['id_admin'],
                    'ses_user'   => $dataUser['username'],
                    'ses_nama'   => $dataUser['nama_admin'],
                    'ses_level'  => $dataUser['akses_level']
                ];
                session()->set($sessionData);
                session()->setFlashdata('success', 'Login Berhasil!');
                return redirect()->to(base_url('admin/dashboard-admin'));
            } else {
                session()->setFlashdata('error', 'Password Salah!');
                return redirect()->to(base_url('admin/login-admin'));
            }
        }
    }

    public function logout()
    {
        session()->remove('ses_id');
        session()->remove('ses_user');
        session()->remove('ses_level');
        session()->setFlashdata('info', 'Anda telah keluar dari sistem!');
        ?>
        <script>
            document.location = "<?= base_url('admin/login-admin') ?>";
        </script>
        <?php
    }

    public function dashboard()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Dashboard';
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/Login/dashboard_admin', $data);
            echo view('Backend/Template/footer', $data);
            
           
        }
    }

    public function master_data_admin()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
            // $uri = service('uri');
            // $pages = $uri->getSegment(2);
            // $dataUser = $modelAdmin 
        } else {
            $data['title'] = 'Admin';
            $data['data_user'] = $this->m_admin->getDataAdmin()->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterAdmin/master-data-admin', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function input_data_admin()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Admin';
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterAdmin/input-admin', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function simpan_data_admin()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $modelAdmin = new M_Admin();
            $nama = $this->request->getPost('nama_admin');
            $username = $this->request->getPost('username');
            $level = $this->request->getPost('akses_level');

            $cekUname = $modelAdmin->getDataAdmin(['username' => $username])->getNumRows();
            if ($cekUname > 0) {
                session()->setFlashdata('error', 'Username sudah digunakan!!');
                ?>
                <script>
                    history.go(-1);
                </script>
                <?php
            } else {
                $hasil = $modelAdmin->autoNumber()->getRowArray();
                if (!$hasil) {
                    $id = "ADM001";
                } else {
                    $kode = $hasil['id_admin'];
                    $noUrut = (int) substr($kode, -3);
                    $noUrut++;
                    $id = "ADM" . sprintf("%03s", $noUrut);
                }

                $dataSimpan = [
                    'id_admin' => $id,
                    'nama_admin' => $nama,
                    'username' => $username,
                    'password' => password_hash($this->request->getPost('pass_admin'), PASSWORD_DEFAULT),
                    'akses_level' => $level,
                    'status' => '0'
                ];

                $modelAdmin->saveDataAdmin($dataSimpan);
                session()->setFlashdata('success', 'Data Admin Berhasil Ditambahkan!!');
                ?>
                <script>
                    document.location = "<?= base_url('admin/master-data-admin') ?>";
                </script>
                <?php
            }
        }
    }

    public function edit_data_admin()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idEdit = $uri->getSegment(3);
            $modelAdmin = new M_Admin();
            $dataAdmin = $modelAdmin->getDataAdmin(['sha1(id_admin)' => $idEdit])->getRowArray();
            session()->set(['idUpdate' => $dataAdmin['id_admin']]);

            $data['title'] = 'Admin';
            $data['admin'] = $dataAdmin;
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterAdmin/edit-admin', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function update_data_admin()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $modelAdmin = new M_Admin();
            $idUpdate = session()->get('idUpdate');
            $nama    = $this->request->getPost('nama_admin');
            $level   = $this->request->getPost('akses_level');
            $username = $this->request->getPost('username');

            if ($nama == "" or $level == "" or $username == "") {
                session()->setFlashdata('error', 'Isian tidak boleh kosong!!');
                ?>
                <script>
                    history.go(-1);
                </script>
                <?php
            } else {
                $dataUpdate = [
                    'nama_admin'  => $nama,
                    'username'    => $username,
                    'akses_level' => $level
                ];

                // Update password hanya jika diisi
                $password = $this->request->getPost('password');
                if (!empty($password)) {
                    $dataUpdate['password'] = password_hash($password, PASSWORD_DEFAULT);
                }

                $modelAdmin->updateDataAdmin($dataUpdate, ['id_admin' => $idUpdate]);
                session()->remove('idUpdate');
                session()->setFlashdata('success', 'Data Admin Berhasil Diperbaharui!!');
                ?>
                <script>
                    document.location = "<?= base_url('admin/master-data-admin') ?>";
                </script>
                <?php
            }
        }
    }

    public function hapus_data_admin()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idHapus = $uri->getSegment(3);
            $modelAdmin = new M_Admin();
            $dataUpdate = [
                'status' => '1'
            ];
            $modelAdmin->deleteDataAdminByWhere(['sha1(id_admin)' => $idHapus]);
            session()->setFlashdata('success', 'Data Admin Berhasil Dihapus!!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-admin') ?>";
            </script>
            <?php
        }
    }

    // KATEGORI
    public function master_data_kategori()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Kategori';
            $data['kategori'] = $this->m_kategori->getDataKategori()->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterKategori/master-data-kategori', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function input_data_kategori()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Kategori';
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterKategori/input-kategori', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function simpan_data_kategori()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data = [
                'nama_kategori' => $this->request->getPost('nama_kategori')
            ];

            $this->m_kategori->saveDataKategori($data);
            session()->setFlashdata('success', 'Data Kategori Berhasil Ditambahkan!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-kategori') ?>";
            </script>
            <?php
        }
    }

    public function edit_data_kategori()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idEdit = $uri->getSegment(3);
            $dataKategori = $this->m_kategori->where('sha1(id_kategori)', $idEdit)->first();
            session()->set(['idUpdateKategori' => $dataKategori['id_kategori']]);

            $data['title'] = 'Kategori';
            $data['kategori'] = $dataKategori;
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterKategori/edit-kategori', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function update_data_kategori()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $idUpdate = session()->get('idUpdateKategori');
            $data = [
                'nama_kategori' => $this->request->getPost('nama_kategori')
            ];

            $this->m_kategori->updateDataKategori($data, ['id_kategori' => $idUpdate]);
            session()->remove('idUpdateKategori');
            session()->setFlashdata('success', 'Data Kategori Berhasil Diperbaharui!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-kategori') ?>";
            </script>
            <?php
        }
    }

    public function hapus_data_kategori()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idHapus = $uri->getSegment(3);
            $this->m_kategori->deleteDataKategoriByWhere(['sha1(id_kategori)' => $idHapus]);
            session()->setFlashdata('success', 'Data Kategori Berhasil Dihapus!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-kategori') ?>";
            </script>
            <?php
        }
    }

    // RAK
    public function master_data_rak()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Rak';
            $data['rak'] = $this->m_rak->getDataRak()->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterRak/master-data-rak', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function input_data_rak()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Rak';
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterRak/input-rak', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function simpan_data_rak()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data = [
                'nama_rak' => $this->request->getPost('nama_rak')
            ];

            $this->m_rak->saveDataRak($data);
            session()->setFlashdata('success', 'Data Rak Berhasil Ditambahkan!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-rak') ?>";
            </script>
            <?php
        }
    }

    public function edit_data_rak()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idEdit = $uri->getSegment(3);
            $dataRak = $this->m_rak->where('sha1(id_rak)', $idEdit)->first();
            session()->set(['idUpdateRak' => $dataRak['id_rak']]);

            $data['title'] = 'Rak';
            $data['rak'] = $dataRak;
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterRak/edit-rak', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function update_data_rak()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $idUpdate = session()->get('idUpdateRak');
            $data = [
                'nama_rak' => $this->request->getPost('nama_rak')
            ];

            $this->m_rak->updateDataRak($data, ['id_rak' => $idUpdate]);
            session()->remove('idUpdateRak');
            session()->setFlashdata('success', 'Data Rak Berhasil Diperbaharui!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-rak') ?>";
            </script>
            <?php
        }
    }

    public function hapus_data_rak()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idHapus = $uri->getSegment(3);
            $this->m_rak->deleteDataRakByWhere(['sha1(id_rak)' => $idHapus]);
            session()->setFlashdata('success', 'Data Rak Berhasil Dihapus!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-rak') ?>";
            </script>
            <?php
        }
    }

    // ANGGOTA
    public function master_data_anggota()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Anggota';
            $data['anggota'] = $this->m_anggota->getDataAnggota()->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterAnggota/master-data-anggota', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function input_data_anggota()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            // Generate ID Anggota otomatis: ANG001, ANG002, dst
            $hasil = $this->m_anggota->autoNumber()->getRowArray();
            if (!$hasil) {
                $id_anggota = 'ANG001';
            } else {
                $kode    = $hasil['id_anggota'];
                $noUrut  = (int) substr($kode, 3);
                $noUrut++;
                $id_anggota = 'ANG' . sprintf('%03d', $noUrut);
            }

            $data['title']      = 'Anggota';
            $data['id_anggota'] = $id_anggota;
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterAnggota/input-anggota', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function simpan_data_anggota()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data = [
                'id_anggota' => $this->request->getPost('id_anggota'),
                'nama_anggota' => $this->request->getPost('nama_anggota'),
                'jk' => $this->request->getPost('jk'),
                'no_telp' => $this->request->getPost('no_telp'),
                'alamat' => $this->request->getPost('alamat')
            ];

            $this->m_anggota->saveDataAnggota($data);
            session()->setFlashdata('success', 'Data Anggota Berhasil Ditambahkan!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-anggota') ?>";
            </script>
            <?php
        }
    }

    public function edit_data_anggota()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idEdit = $uri->getSegment(3);
            $dataAnggota = $this->m_anggota->where('sha1(id_anggota)', $idEdit)->first();
            session()->set(['idUpdateAnggota' => $dataAnggota['id_anggota']]);

            $data['title'] = 'Anggota';
            $data['anggota'] = $dataAnggota;
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterAnggota/edit-anggota', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function update_data_anggota()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $idUpdate = session()->get('idUpdateAnggota');
            $data = [
                'nama_anggota' => $this->request->getPost('nama_anggota'),
                'jk'           => $this->request->getPost('jk'),
                'no_telp'      => $this->request->getPost('no_telp'),
                'alamat'       => $this->request->getPost('alamat')
            ];

            $this->m_anggota->updateDataAnggota($data, ['id_anggota' => $idUpdate]);
            session()->remove('idUpdateAnggota');
            session()->setFlashdata('success', 'Data Anggota Berhasil Diperbaharui!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-anggota') ?>";
            </script>
            <?php
        }
    }

    public function hapus_data_anggota()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idHapus = $uri->getSegment(3);
            $this->m_anggota->deleteDataAnggotaByWhere(['sha1(id_anggota)' => $idHapus]);
            session()->setFlashdata('success', 'Data Anggota Berhasil Dihapus!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-anggota') ?>";
            </script>
            <?php
        }
    }

    // BUKU
    public function master_data_buku()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Buku';
            $data['dataBuku'] = $this->m_buku->getDataBukuJoin()->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterBuku/master-data-buku', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function input_data_buku()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Buku';
            $data['kategori'] = $this->m_kategori->getDataKategori()->getResultArray();
            $data['rak'] = $this->m_rak->getDataRak()->getResultArray();
            
            // Auto number for id_buku
            $q = $this->m_buku->autoNumber()->getRowArray();
            if ($q) {
                $lastNo = substr($q['id_buku'], 3);
                $nextNo = intval($lastNo) + 1;
                $data['id_buku'] = 'BK-' . sprintf('%03d', $nextNo);
            } else {
                $data['id_buku'] = 'BK-001';
            }

            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterBuku/input-buku', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function simpan_data_buku()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $cover_buku = $this->request->getFile('cover_buku');
            $e_book = $this->request->getFile('e_book');

            $namaFile1 = null;
            $namaFile2 = null;

            if ($cover_buku && $cover_buku->isValid() && !$cover_buku->hasMoved()) {
                $namaFile1 = $cover_buku->getRandomName();
                $cover_buku->move('Assets/CoverBuku', $namaFile1);
            }

            if ($e_book && $e_book->isValid() && !$e_book->hasMoved()) {
                $namaFile2 = $e_book->getRandomName();
                $e_book->move('Assets/E-Book', $namaFile2);
            }

            $data = [
                'id_buku' => $this->request->getPost('id_buku'),
                'judul_buku' => $this->request->getPost('judul_buku'),
                'pengarang' => $this->request->getPost('pengarang'),
                'penerbit' => $this->request->getPost('penerbit'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah_eksemplar' => $this->request->getPost('jumlah_eksemplar'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'id_rak' => $this->request->getPost('id_rak'),
                'keterangan' => $this->request->getPost('keterangan'),
                'cover_buku' => $namaFile1,
                'e_book' => $namaFile2
            ];

            $this->m_buku->saveDataBuku($data);
            session()->setFlashdata('success', 'Data Buku Berhasil Ditambahkan!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-buku') ?>";
            </script>
            <?php
        }
    }

    public function edit_data_buku()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idEdit = $uri->getSegment(3);
            $dataBuku = $this->m_buku->where('sha1(id_buku)', $idEdit)->first();
            session()->set(['idUpdateBuku' => $dataBuku['id_buku']]);

            $data['title'] = 'Buku';
            $data['buku'] = $dataBuku;
            $data['kategori'] = $this->m_kategori->getDataKategori()->getResultArray();
            $data['rak'] = $this->m_rak->getDataRak()->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/MasterBuku/edit-buku', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function update_data_buku()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $idUpdate = session()->get('idUpdateBuku');
            $bukuLama = $this->m_buku->where('id_buku', $idUpdate)->first();

            $cover_buku = $this->request->getFile('cover_buku');
            $e_book = $this->request->getFile('e_book');

            $namaFile1 = $bukuLama['cover_buku'];
            $namaFile2 = $bukuLama['e_book'];

            if ($cover_buku && $cover_buku->getError() != UPLOAD_ERR_NO_FILE) {
                if (!$cover_buku->isValid()) {
                    session()->setFlashdata('error', $cover_buku->getErrorString());
                    ?>
                    <script>
                        history.go(-1);
                    </script>
                    <?php
                    return;
                }
                if (!$this->validate([
                    'cover_buku' => [
                        'label' => 'Cover Buku',
                        'rules' => 'max_size[cover_buku,1024]|is_image[cover_buku]|mime_in[cover_buku,image/jpg,image/jpeg,image/png]',
                        'errors' => [
                            'max_size' => 'Ukuran file Cover Buku maksimal 1 MB.',
                            'is_image' => 'File Cover Buku harus berupa gambar.',
                            'mime_in'  => 'Format file Cover Buku harus jpg, jpeg, atau png.'
                        ]
                    ]
                ])) {
                    session()->setFlashdata('error', $this->validator->getError('cover_buku'));
                    ?>
                    <script>
                        history.go(-1);
                    </script>
                    <?php
                    return;
                }

                if ($namaFile1 && file_exists('Assets/CoverBuku/' . $namaFile1)) {
                    unlink('Assets/CoverBuku/' . $namaFile1);
                }
                $namaFile1 = $cover_buku->getRandomName();
                $cover_buku->move('Assets/CoverBuku', $namaFile1);
            }

            if ($e_book && $e_book->getError() != UPLOAD_ERR_NO_FILE) {
                if (!$e_book->isValid()) {
                    session()->setFlashdata('error', $e_book->getErrorString());
                    ?>
                    <script>
                        history.go(-1);
                    </script>
                    <?php
                    return;
                }
                if (!$this->validate([
                    'e_book' => [
                        'label' => 'E-Book',
                        'rules' => 'max_size[e_book,10240]|ext_in[e_book,pdf]',
                        'errors' => [
                            'max_size' => 'Ukuran file E-Book maksimal 10 MB.',
                            'ext_in'   => 'Format file E-Book harus pdf.'
                        ]
                    ]
                ])) {
                    session()->setFlashdata('error', $this->validator->getError('e_book'));
                    ?>
                    <script>
                        history.go(-1);
                    </script>
                    <?php
                    return;
                }

                if ($namaFile2 && file_exists('Assets/E-Book/' . $namaFile2)) {
                    unlink('Assets/E-Book/' . $namaFile2);
                }
                $namaFile2 = $e_book->getRandomName();
                $e_book->move('Assets/E-Book', $namaFile2);
            }

            $data = [
                'judul_buku' => $this->request->getPost('judul_buku'),
                'pengarang' => $this->request->getPost('pengarang'),
                'penerbit' => $this->request->getPost('penerbit'),
                'tahun' => $this->request->getPost('tahun'),
                'jumlah_eksemplar' => $this->request->getPost('jumlah_eksemplar'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'id_rak' => $this->request->getPost('id_rak'),
                'keterangan' => $this->request->getPost('keterangan'),
                'cover_buku' => $namaFile1,
                'e_book' => $namaFile2
            ];

            $this->m_buku->updateDataBuku($data, ['id_buku' => $idUpdate]);
            session()->remove('idUpdateBuku');
            session()->setFlashdata('success', 'Data Buku Berhasil Diperbaharui!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-buku') ?>";
            </script>
            <?php
        }
    }

    public function hapus_data_buku()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $idHapus = $uri->getSegment(3);
            $buku = $this->m_buku->where('sha1(id_buku)', $idHapus)->first();
            
            if ($buku['cover_buku'] && file_exists('Assets/CoverBuku/' . $buku['cover_buku'])) {
                unlink('Assets/CoverBuku/' . $buku['cover_buku']);
            }
            if ($buku['e_book'] && file_exists('Assets/E-Book/' . $buku['e_book'])) {
                unlink('Assets/E-Book/' . $buku['e_book']);
            }

            $this->m_buku->deleteDataBukuByWhere(['sha1(id_buku)' => $idHapus]);
            session()->setFlashdata('success', 'Data Buku Berhasil Dihapus!');
            ?>
            <script>
                document.location = "<?= base_url('admin/master-data-buku') ?>";
            </script>
            <?php
        }
    }

    // PEMINJAMAN
    public function data_transaksi_peminjaman()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Peminjaman';
            $data['dataPeminjaman'] = $this->m_peminjaman->getDataPeminjaman()->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/Transaksi/Peminjaman/data-peminjaman', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function peminjaman_step1()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Peminjaman';
            $data['dataAnggota'] = $this->m_anggota->getDataAnggota()->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/Transaksi/Peminjaman/peminjaman-step1', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function peminjaman_step2()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $id_anggota = $this->request->getPost('id_anggota');
            $dataAnggota = $this->m_anggota->getDataAnggota(['id_anggota' => $id_anggota])->getRowArray();
            
            if (!$dataAnggota) {
                session()->setFlashdata('error', 'Data Anggota tidak ditemukan!');
                ?>
                <script>
                    history.go(-1);
                </script>
                <?php
            } else {
                // Simpan id_anggota ke session agar step 2 bisa diakses kembali via GET
                session()->set(['idAnggotaPinjam' => $id_anggota]);

                $data['title'] = 'Peminjaman';
                $data['anggota'] = $dataAnggota;
                $data['dataBuku'] = $this->m_buku->getDataBukuJoin()->getResultArray();
                $data['temp'] = $this->m_peminjaman->getTemp()->getResultArray();

                // Auto number for id_peminjaman
                $q = $this->m_peminjaman->autoNumber()->getRowArray();
                if ($q) {
                    $lastNo = substr($q['id_peminjaman'], 2);
                    $nextNo = intval($lastNo) + 1;
                    $data['id_peminjaman'] = 'PJ' . sprintf('%04d', $nextNo);
                } else {
                    $data['id_peminjaman'] = 'PJ0001';
                }

                echo view('Backend/Template/header', $data);
                echo view('Backend/Template/sidebar', $data);
                echo view('Backend/Transaksi/Peminjaman/peminjaman-step2', $data);
                echo view('Backend/Template/footer', $data);
            }
        }
    }

    public function peminjaman_step2_get()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $id_anggota = session()->get('idAnggotaPinjam');
            if (!$id_anggota) {
                return redirect()->to(base_url('admin/peminjaman-step1'));
            }

            $dataAnggota = $this->m_anggota->getDataAnggota(['id_anggota' => $id_anggota])->getRowArray();
            if (!$dataAnggota) {
                session()->setFlashdata('error', 'Data Anggota tidak ditemukan!');
                return redirect()->to(base_url('admin/peminjaman-step1'));
            }

            $data['title'] = 'Peminjaman';
            $data['anggota'] = $dataAnggota;
            $data['dataBuku'] = $this->m_buku->getDataBukuJoin()->getResultArray();
            $data['temp'] = $this->m_peminjaman->getTemp()->getResultArray();

            // Auto number for id_peminjaman
            $q = $this->m_peminjaman->autoNumber()->getRowArray();
            if ($q) {
                $lastNo = substr($q['id_peminjaman'], 2);
                $nextNo = intval($lastNo) + 1;
                $data['id_peminjaman'] = 'PJ' . sprintf('%04d', $nextNo);
            } else {
                $data['id_peminjaman'] = 'PJ0001';
            }

            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/Transaksi/Peminjaman/peminjaman-step2', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function simpan_temp_pinjam()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $id_buku = $this->request->getPost('id_buku');
            $cek = $this->m_peminjaman->cekTemp($id_buku)->getRowArray();
            
            if ($cek) {
                session()->setFlashdata('error', 'Buku ini sudah ada di daftar pinjam!');
            } else {
                $data = ['id_buku' => $id_buku];
                $this->m_peminjaman->saveTemp($data);
                // Kurangi stok sementara
                $buku = $this->m_buku->where('id_buku', $id_buku)->first();
                if ($buku && $buku['jumlah_eksemplar'] > 0) {
                    $this->m_buku->updateDataBuku(['jumlah_eksemplar' => $buku['jumlah_eksemplar'] - 1], ['id_buku' => $id_buku]);
                }
                session()->setFlashdata('success', 'Buku berhasil ditambahkan ke keranjang!');
            }
            return redirect()->to(base_url('admin/peminjaman-step2'));
        }
    }

    public function simpan_temp_pinjam_get($sha_buku = null)
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            // Ambil buku via sha1
            $buku = $this->m_buku->where('sha1(id_buku)', $sha_buku)->first();
            if (!$buku) {
                session()->setFlashdata('error', 'Buku tidak ditemukan!');
                return redirect()->to(base_url('admin/peminjaman-step2'));
            }

            $id_buku = $buku['id_buku'];
            $cek = $this->m_peminjaman->cekTemp($id_buku)->getRowArray();
            
            if ($cek) {
                session()->setFlashdata('error', 'Buku ini sudah ada di keranjang peminjaman!');
            } elseif ($buku['jumlah_eksemplar'] <= 0) {
                session()->setFlashdata('error', 'Stok buku habis!');
            } else {
                $data = ['id_buku' => $id_buku];
                $this->m_peminjaman->saveTemp($data);
                // Kurangi stok sementara
                $this->m_buku->updateDataBuku(['jumlah_eksemplar' => $buku['jumlah_eksemplar'] - 1], ['id_buku' => $id_buku]);
                session()->setFlashdata('success', 'Buku berhasil ditambahkan ke keranjang!');
            }
            return redirect()->to(base_url('admin/peminjaman-step2'));
        }
    }

    public function hapus_temp()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $id = $uri->getSegment(3);
            // Kembalikan stok buku
            $temp = $this->m_peminjaman->getTempById($id);
            if ($temp) {
                $buku = $this->m_buku->where('id_buku', $temp['id_buku'])->first();
                if ($buku) {
                    $this->m_buku->updateDataBuku(['jumlah_eksemplar' => $buku['jumlah_eksemplar'] + 1], ['id_buku' => $temp['id_buku']]);
                }
            }
            $this->m_peminjaman->deleteTemp($id);
            session()->setFlashdata('success', 'Buku berhasil dihapus dari keranjang!');
            return redirect()->to(base_url('admin/peminjaman-step2'));
        }
    }

    public function simpan_transaksi_peminjaman()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $id_peminjaman = $this->request->getPost('id_peminjaman');
            $id_anggota = $this->request->getPost('id_anggota');
            $tgl_pinjam = $this->request->getPost('tgl_pinjam');
            $tgl_kembali = $this->request->getPost('tgl_kembali');

            // Validasi: pastikan temp tidak kosong
            $temp = $this->m_peminjaman->getTemp()->getResultArray();
            if (empty($temp)) {
                session()->setFlashdata('error', 'Keranjang peminjaman kosong! Tambahkan buku terlebih dahulu.');
                return redirect()->to(base_url('admin/peminjaman-step2'));
            }

            $data = [
                'id_peminjaman' => $id_peminjaman,
                'id_admin'      => session()->get('ses_id'),
                'id_anggota'    => $id_anggota,
                'tgl_pinjam'    => $tgl_pinjam,
                'tgl_kembali'   => $tgl_kembali,
                'status_peminjaman' => 'Dipinjam'
            ];

            $this->m_peminjaman->savePeminjaman($data);

            // Simpan detail peminjaman (stok sudah dikurangi saat masuk keranjang)
            foreach ($temp as $t) {
                $dataDetail = [
                    'id_peminjaman' => $id_peminjaman,
                    'id_buku'       => $t['id_buku'],
                    'status_kembali' => 'Belum'
                ];
                $this->m_peminjaman->saveDetailPeminjaman($dataDetail);
            }

            // Kosongkan tabel temp
            $this->m_peminjaman->emptyTemp();

            // Hapus session anggota pinjam
            session()->remove('idAnggotaPinjam');

            // Generate QR Code
            try {
                if (!is_dir(FCPATH . 'Assets/QRCode')) {
                    mkdir(FCPATH . 'Assets/QRCode', 0777, true);
                }
                if (class_exists('\\Endroid\\QrCode\\QrCode')) {
                    $writer = new \Endroid\QrCode\Writer\PngWriter();
                    $qrCode = new \Endroid\QrCode\QrCode($id_peminjaman);
                    $result = $writer->write($qrCode);
                    $result->saveToFile(FCPATH . 'Assets/QRCode/' . $id_peminjaman . '.png');
                }
            } catch (\Exception $e) {
                // QR Code gagal dibuat, lanjutkan tanpa error fatal
                log_message('error', 'QR Code error: ' . $e->getMessage());
            }

            session()->setFlashdata('success', 'Transaksi Peminjaman Berhasil Disimpan! ID: ' . $id_peminjaman);
            ?>
            <script>
                document.location = "<?= base_url('admin/data-transaksi-peminjaman') ?>";
            </script>
            <?php
        }
    }

    public function cetak_peminjaman()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $id = $uri->getSegment(3);
            $data['peminjaman'] = $this->m_peminjaman->getDataPeminjaman(['tbl_peminjaman.id_peminjaman' => $id])->getRowArray();
            $data['detail'] = $this->m_peminjaman->detailPeminjaman($id)->getResultArray();
            echo view('Backend/Transaksi/Peminjaman/cetak-peminjaman', $data);
        }
    }

    // PENGEMBALIAN
    public function data_transaksi_pengembalian()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $data['title'] = 'Pengembalian';
            $data['peminjaman'] = $this->m_peminjaman->getDataPeminjaman(['status_peminjaman' => 'Dipinjam'])->getResultArray();
            echo view('Backend/Template/header', $data);
            echo view('Backend/Template/sidebar', $data);
            echo view('Backend/Transaksi/Pengembalian/data-pengembalian', $data);
            echo view('Backend/Template/footer', $data);
        }
    }

    public function kembalikan_buku()
    {
        if (session()->get('ses_id') == "" or session()->get('ses_user') == "" or session()->get('ses_level') == "") {
            session()->setFlashdata('error', 'Silakan login terlebih dahulu!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login-admin') ?>";
            </script>
            <?php
        } else {
            $uri = service('uri');
            $id_peminjaman = $uri->getSegment(3);
            $id_buku = $uri->getSegment(4);

            $db = \Config\Database::connect();
            $db->table('tbl_detail_peminjaman')
                ->where(['id_peminjaman' => $id_peminjaman, 'id_buku' => $id_buku])
                ->update(['status_kembali' => 'Sudah']);

            // Update stok
            $buku = $this->m_buku->where('id_buku', $id_buku)->first();
            $newStok = $buku['jumlah_eksemplar'] + 1;
            $this->m_buku->updateDataBuku(['jumlah_eksemplar' => $newStok], ['id_buku' => $id_buku]);

            // Cek sisa
            $cekSisa = $db->table('tbl_detail_peminjaman')
                ->where(['id_peminjaman' => $id_peminjaman, 'status_kembali' => 'Belum'])
                ->countAllResults();

            if ($cekSisa == 0) {
                $db->table('tbl_peminjaman')
                    ->where('id_peminjaman', $id_peminjaman)
                    ->update(['status_peminjaman' => 'Dikembalikan']);
            }

            session()->setFlashdata('success', 'Buku Berhasil Dikembalikan!');
            ?>
            <script>
                document.location = "<?= base_url('admin/data-transaksi-pengembalian') ?>";
            </script>
            <?php
        }
    }
}

