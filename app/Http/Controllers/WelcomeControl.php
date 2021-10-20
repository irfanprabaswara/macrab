<?php

namespace App\Http\Controllers;

use App\Models\ProteksiTower\TowerEse;
use App\Models\ProteksiTower\TowerDGS;
use App\Models\ProteksiTower\TowerTLA;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class WelcomeControl extends Controller
{
    /**
     * @return [type]
     */
    public function get()
    {
        if (empty(Auth::user())) {
            return redirect('/login', 'refresh');
        } else {
            $data['title'] = 'Dashboard';

            // menampilkan jumlah tower yg masuk pada hari ini
            $data['row_count_tower_ese'] = DB::table('tower_ese')->whereNull('tower_ese.deleted_at')
            ->whereDate('tower_ese.created_at', 'like', Carbon::now())->count('id');

            // menampilkan jumlah tower yg masuk pada hari ini
            $data['row_count_tower_dgs'] = DB::table('tower_dgs')->whereNull('tower_dgs.deleted_at')
            ->whereDate('tower_dgs.created_at', 'like', Carbon::now())->count('id');

            // menampilkan jumlah tower yg masuk pada hari ini
            $data['row_count_tower_tla'] = DB::table('tower_tla')->whereNull('tower_tla.deleted_at')
            ->whereDate('tower_tla.created_at', 'like', Carbon::now())->count('id');

            // data warning proteksi tower

            // menampilkan jumlah tower ese yg warning
            $data['row_count_tower_ese_warning'] = DB::table('tower_ese')->whereNull('tower_ese.deleted_at')
            ->Where('tower_ese.box_ese', '!=', 'Baik')
            ->orWhere('tower_ese.pita_magnetik', '!=', 'Normal')
            ->orWhere('tower_ese.down_konduktor', '!=', 'Normal')
            ->orWhere('tower_ese.bola_ese', '!=', 'Normal')
            ->orWhere('tower_ese.grounding', '!=', 'Baik')
            ->distinct('id_section')
            ->count('id_section');

            // menampilkan jumlah tower DGS yg warning
            $data['row_count_tower_dgs_warning'] = DB::table('tower_dgs')->whereNull('tower_dgs.deleted_at')
            ->Where('tower_dgs.konduktor_a3cs', '!=', 'Normal')
            ->orWhere('tower_dgs.isolator_pengikat_a3cs', '!=', 'Normal')
            ->orWhere('tower_dgs.isolator_tumpu_atas', '!=', 'Normal' )
            ->orWhere('tower_dgs.isolator_gantung', '!=', 'Normal')
            ->orWhere('tower_dgs.gsw_rangkaian_atas', '!=', 'Normal')
            ->orWhere('tower_dgs.grounding', '!=', 'Normal')
            ->distinct('id_section')
            ->count('id_section');

            // menampilkan jumlah tower tla yg warning
            $data['row_count_tower_tla_warning'] = DB::table('tower_tla')->whereNull('tower_tla.deleted_at')
            ->Where('tower_tla.transponder', '!=', 'Normal')
            ->orWhere('tower_tla.konduktor_cu_grounding', '!=', 'Normal')
            ->orWhere('tower_tla.isolator_tla', '!=', 'Normal')
            ->orWhere('tower_tla.grounding', '!=', 'Normal')
            ->distinct('id_section')
            ->count('id_section');


            // menampilkan jumlah grounding yg pada hari ini
            $data['row_count_grounding_ese'] = DB::table('grounding_ese')->whereNull('grounding_ese.deleted_at')
            ->whereDate('grounding_ese.created_at', 'like', Carbon::now())->count('id');

            // menampilkan jumlah grounding yg pada hari ini
            $data['row_count_grounding_dgs'] = DB::table('grounding_dgs')->whereNull('grounding_dgs.deleted_at')
            ->whereDate('grounding_dgs.created_at', 'like', Carbon::now())->count('id');

            // menampilkan jumlah grounding yg pada hari ini
            $data['row_count_grounding_tla'] = DB::table('grounding_tla')->whereNull('grounding_tla.deleted_at')
            ->whereDate('grounding_tla.created_at', 'like', Carbon::now())->count('id');

            // menampilkan jumlah grounding yg pada hari ini
            $data['row_count_grounding_tower'] = DB::table('grounding_tower')->whereNull('grounding_tower.deleted_at')
            ->whereDate('grounding_tower.created_at', 'like', Carbon::now())->count('id');

            // data warning pada grounding

            // menampilkan jumlah grounding yg lebih dari 10
            $data['row_count_grounding_ese_warning'] = DB::table('grounding_ese')->whereNull('grounding_ese.deleted_at')
            ->where('grounding_ese.nilai_grounding', '>=', 10)->count('id');

            // menampilkan jumlah grounding yg lebih dari 10
            $data['row_count_grounding_dgs_warning'] = DB::table('grounding_dgs')->whereNull('grounding_dgs.deleted_at')
            ->where('grounding_dgs.nilai_grounding', '>=', 10)->count('id');

            // menampilkan jumlah grounding yg lebih dari 10
            $data['row_count_grounding_tla_warning'] = DB::table('grounding_tla')->whereNull('grounding_tla.deleted_at')
            ->where('grounding_tla.nilai_grounding', '>=', 10)->count('id');

            // menampilkan jumlah grounding yg lebih dari 10
            $data['row_count_grounding_tower_warning'] = DB::table('grounding_tower')->whereNull('grounding_tower.deleted_at')
            ->where('grounding_tower.nilai_grounding', '>=', 10)->count('id');


            // menampilkan jumlah CBMLP yg masuk pada hari ini
            $data['row_count_cbmlp_sauh'] = DB::table('cbmlp_sauh')->whereNull('cbmlp_sauh.deleted_at')
            ->whereDate('cbmlp_sauh.created_at', 'like', Carbon::now())->count('id');

            // menampilkan jumlah CBMLP yg masuk pada hari ini
            $data['row_count_cbmlp_ngenang'] = DB::table('cbmlp_ngenang')->whereNull('cbmlp_ngenang.deleted_at')
            ->whereDate('cbmlp_ngenang.created_at', 'like', Carbon::now())->count('id');

            // menampilkan jumlah CBMLP yg masuk pada hari ini
            $data['row_count_cbmlp_talok'] = DB::table('cbmlp_talok')->whereNull('cbmlp_talok.deleted_at')
            ->whereDate('cbmlp_talok.created_at', 'like', Carbon::now())->count('id');



            // cek status tower ese pada data paling terakhir di input
            $data['row_ese'] = DB::table('tower_ese')->whereNull('tower_ese.deleted_at')
            ->first();

            // cek status tower DGS pada data paling terakhir di input
            $data['row_dgs'] = DB::table('tower_dgs')->whereNull('tower_dgs.deleted_at')
            ->first();

            // cek status tower tla pada data paling terakhir di input
            $data['row_tla'] = DB::table('tower_tla')->whereNull('tower_tla.deleted_at')
            ->first();


            // menghitung jumlah nilai counter ese
            $data['grounding_ese'] = DB::table('grounding_ese')->whereNull('grounding_ese.deleted_at')
            ->whereDate('grounding_ese.created_at', 'like', Carbon::now())->sum('nilai_grounding');

            // menghitung jumlah nilai grounding DGS
            $data['grounding_dgs'] = DB::table('grounding_dgs')->whereNull('grounding_dgs.deleted_at')
            ->whereDate('grounding_dgs.created_at', 'like', Carbon::now())->sum('nilai_grounding');

            // menghitung jumlah nilai grounding tla
            $data['grounding_tla'] = DB::table('grounding_tla')->whereNull('grounding_tla.deleted_at')
            ->whereDate('grounding_tla.created_at', 'like', Carbon::now())->sum('nilai_grounding');

            // menghitung jumlah nilai grounding tower
            $data['grounding_tower'] = DB::table('grounding_tower')->whereNull('grounding_tower.deleted_at')
            ->whereDate('grounding_tower.created_at', 'like', Carbon::now())->sum('nilai_grounding');


            // cek status CBMLP sauh pada data paling terakhir di input
            $data['row_cbmlp_sauh'] = DB::table('cbmlp_sauh')->whereNull('cbmlp_sauh.deleted_at')
            ->first();

            // cek status CBMLP ngenang pada data paling terakhir di input
            $data['row_cbmlp_ngenang'] = DB::table('cbmlp_ngenang')->whereNull('cbmlp_ngenang.deleted_at')
            ->first();

            // cek status CBMLP talok pada data paling terakhir di input
            $data['row_cbmlp_talok'] = DB::table('cbmlp_talok')->whereNull('cbmlp_talok.deleted_at')
            ->first();

            return view('/welcome', $data);
        }
    }


    /**
     * @param Request $request
     *
     * @return [logout]
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login')
            ->withSuccess('Anda Telah Keluar!');
    }


}
