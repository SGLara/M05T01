<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    public function index()
    {
        return view('query');
    }

    public function showQueryOne()
    {
        $query1 = DB::table('cities')->orderBy('name', 'ASC')->get();

        echo "<center><table border='5px'><tr><th>City Table (ASC): </th></tr>";
        foreach ($query1 as $city) {
            echo "<tr><td>$city->name</td></tr>";
        }
        echo "</table></center>";
    }

    public function showQueryTwo()
    {
        $query2 = DB::table('cities')->select('*')->orderBy('name', 'DESC')->get();

        echo "<center><table border='5px'><tr><th>City Table (DESC): </th></tr>";
        foreach ($query2 as $city) {
            echo "<tr><td>$city->name</td></tr>";
        }
        echo '</table></center>';
    }

    public function showQueryThree()
    {
        $query3 = DB::table('countries')
            ->select('name', 'name_en')
            ->orderBy('name_en', 'ASC')
            ->orderBy('name', 'ASC')
            ->get();

        echo "<center><table border='5px'><tr><th>English Name</th><th>Spanish Name</th></tr>";
        foreach ($query3 as $city) {
            echo "<tr>
            <td>$city->name</td>
            <td>$city->name_en</td>
            </tr>";
        }
        echo "</table></center>";

        // 3. SELECT name AS spanish_name, name_en AS english_name FROM countries ORDER BY spanish_name ASC, english_name ASC;
    }

    public function showQueryFour()
    {
        $query4 = DB::table('cities')
            ->select('name')
            ->where('name', 'LIKE', "San %")
            ->get();

        echo "<center><table border='5px'><tr><th>CITIES NAME</th></tr>";
        foreach ($query4 as $city) {
            echo "<tr><td> $city->name</td></tr>";
        }
        echo "</table></center>";
    }

    public function showQueryFive()
    {
        $query5 = DB::table('countries')->select('id')->where('name', 'Guatemala')->get();

        echo "<center><table border='5px'><tr><th>GUATEMALA id</th></tr>";
        foreach ($query5 as $id) {
            echo "<tr><td> $id->id </td></tr>";
        }
        echo "</table></center>";
    }

    public function showQuerySix()
    {
        $query6 = DB::table('states')->select('name')
            ->where('country_id', 70)
            ->orderBy('name')
            ->get();

        echo "<center><table border='5px'><tr><th>GUATEMALA STATES</th></tr>";
        foreach ($query6 as $state) {
            echo "<tr><td> $state->name</td></tr>";
        }
        echo "</table></center>";
    }

    public function showQuerySeven()
    {
        $query7 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'email')
            ->where('teléfono', 'LIKE', "6%")
            ->get();

        echo "<center><table border='5px'><tr><th>PRIMER_NOMBRE</th><th>PRIMER_APELLIDO</th><th>EMAIL</th></tr>";
        foreach ($query7 as $info) {
            echo "<tr>
            <td>$info->primer_nombre</td>
            <td>$info->primer_apellido</td>
            <td>$info->email</td>
            </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryEight()
    {
        $query8 = DB::table('students')
            ->where('carrera', 'LIKE', "Ingeniería %")
            ->count('carrera');

        echo "<center><table border='5px'><tr><th>AMOUNT OF STUDENTS</th></tr>";
        echo "<tr><td> $query8 </td></tr>";

        echo "</table></center>";
    }

    public function showQueryNine()
    {

        $query9 = DB::table('students')
            ->select('primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'nota_paes')
            ->where('carrera', 'Ingeniería en Sistemas')
            ->whereBetween('ano_ingreso', [2000, 2010])
            ->orderBy('nota_paes', 'ASC')
            ->get();

        echo "<center><table border='5px'>
        <tr><th>PRIMER_NOMBRE</th>
        <th>SEGUNDO_NOMBRE</th>
        <th>PRIMER_APELLIDO</th>
        <th>SEGUNDO_APELLIDO</th>
        <th>NOTA_PAES</th></tr>";

        foreach ($query9 as $info) {
            echo "<tr>
            <td>$info->primer_nombre</td>
            <td>$info->segundo_nombre</td>
            <td>$info->primer_apellido</td>
            <td>$info->segundo_apellido</td>
            <td>$info->nota_paes </td>
            </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryTen()
    {
        $query10 = DB::table('students')
            ->avg('nota_paes');

        echo "<center><table border='5px'>
        <tr><th>PAES AVERAGE FROM STUDENTS</th></tr>
        <tr><td>$query10</td></tr>
        </table></center>";
    }

    public function showQueryEleven()
    {
        $query11 = DB::table('students')->avg('nota_admision');

        echo "<center><table border='5px'>
        <tr><th>ADMISION AVERAGE FROM STUDENTS</th></tr>
        <tr><td>$query11</td></tr>
        </table></center>";
    }

    public function showQueryTwelve()
    {
        $query12 = DB::table('students')
            ->select(DB::raw('*, ROUND((nota_paes + nota_admision)/2,2) as promedio_paes_admision'))
            ->orderBy('promedio_paes_admision', 'DESC')
            ->get();

        echo "<center><table border='5px'><tr><th>PRIMER_NOMBRE</th><th>PRIMER_APELLIDO</th><th>PAES + ADMISION AVG</th></tr>";
        foreach ($query12 as $grade) {
            echo "<tr>
            <td>$grade->primer_nombre</td>
            <td>$grade->primer_apellido</td>
            <td>$grade->promedio_paes_admision</td>
            </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryThirteen()
    {
        $query13 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'teléfono', 'nota_paes')
            ->orderBy('nota_paes', 'DESC')
            ->take(20)
            ->get();

        echo "<center><table border='5px'>
        <tr>
        <th>PRIMER_NOMBRE</th>
        <th>PRIMER_APELLIDO</th>
        <th>TELEFONO</th>
        <th>NOTA_PAES</th>
        </tr>";

        foreach ($query13 as $grade) {
            echo "<tr>
            <td>$grade->primer_nombre</td>
            <td>$grade->primer_apellido</td>
            <td>$grade->teléfono</td>
            <td>$grade->nota_paes</td>
            </tr>";
        }

        echo "</table></center>";
    }

    public function showQueryFourteen()
    {
        $query14 = DB::table('students')
            ->select('carrera', DB::raw('ROUND(AVG(nota_admision),2) as promedio_nota_de_admision'))
            ->groupBy('carrera')
            ->get();

        echo "<center><table border='5px'><tr><th>CAREER</th><th>ADMISION AVERAGE</th></tr>";
        foreach ($query14 as $avg) {
            echo "<tr>
                <td>$avg->carrera</td>
                <td>$avg->promedio_nota_de_admision</td>
                </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryFifteen()
    {
        $query15 = DB::table('students')
            ->select('ano_ingreso', DB::raw('count(ano_ingreso) as students'))
            ->groupBy('ano_ingreso')
            ->get();

        echo "<center><table border='5px'><tr><th>YEAR</th><th>REGISTERED STUDENTS</th></tr>";
        foreach ($query15 as $students) {
            echo "<tr>
                <td>$students->ano_ingreso</td>
                <td>$students->students</td>
                </tr>";
        }
        echo "</table></center>";
    }

    public function showQuerySixteen()
    {
        $query16 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'nota_paes')
            ->where('nota_paes', '<=', 6)
            ->orderBy('nota_paes', 'DESC')
            ->get();

        echo "<center><table border='5px'><tr><th>PRIMER_NOMBRE</th><th>PRIMER_APELLIDO</th><th>PAES SCORE</th></tr>";
        foreach ($query16 as $grade) {
            echo "<tr>
                <td>$grade->primer_nombre</td>
                <td>$grade->primer_apellido</td>
                <td>$grade->nota_paes</td>
                </tr>";
            if ($grade->nota_paes && $grade->primer_nombre && $grade->primer_apellido == null) {
                echo "</table></center>";
            }
        }
        echo "</table></center>";
    }

    public function showQuerySeventeen()
    {
        $query17 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'nota_paes', 'nota_admision')
            ->where('nota_paes', '<=', 6)
            ->where('nota_admision', '<=', 6)
            ->get();

        echo "<center><table border='5px'>
            <tr>
            <th>PRIMER_NOMBRE</th>
            <th>PRIMER_APELLIDO</th>
            <th>NOTA PAES</th>
            <th>NOTA DE ADMISION</th>
            </tr>";

        foreach ($query17 as $grade) {
            echo "<tr>
                <td>$grade->primer_nombre</td>
                <td>$grade->primer_apellido</td>
                <td>$grade->nota_paes</td>
                <td>$grade->nota_admision</td>
                </tr>";
            if ($grade->nota_paes && $grade->primer_nombre && $grade->primer_apellido && $grade->nota_admision == null) {
                echo "</table></center>";
            }
        }
        echo "</table></center>";
    }

    public function showQueryEighteen()
    {
        $query18 = DB::table('students')
            ->select('carrera', 'nota_admision')
            ->orderBy('nota_admision', 'ASC')
            ->get();

        echo "<center><table border='5px'>
            <tr>
            <th>CAREER</th>
            <th>ADMISION SCORES</th>
            </tr>";

        foreach ($query18 as $grade) {
            echo "<tr>
                <td>$grade->carrera</td>
                <td>$grade->nota_admision</td>
                </tr>";
            if ($grade->carrera && $grade->nota_admision == null) {
                echo "</table></center>";
            }
        }
        echo "</table></center>";
    }

    public function showQueryNineteen()
    {
        $query19 = DB::table('students')
            ->select('carrera', 'nota_admision')
            ->where('nota_admision', '>', 7)
            ->orderBy('nota_admision', 'DESC')
            ->get();

        echo "<center><table border='5px'>
            <tr>
            <th>CARRERA</th>
            <th>NOTA ADMISION</th>
            </tr>";

        foreach ($query19 as $grade) {
            echo "<tr>
                <td>$grade->carrera</td>
                <td>$grade->nota_admision</td>
                </tr>";

            if ($grade->carrera && $grade->nota_admision == null) {
                echo "</table></center>";
            }
        }
        echo "</table></center>";
    }

    public function showQueryTwenty()
    {
        $query20 = DB::table('students')
            ->select('*')
            ->where('primer_apellido', 'LIKE', "A%")
            ->where('email', 'LIKE', "%gmail%")
            ->where('ano_ingreso', '<', 2010)
            ->whereRaw('nota_paes + nota_admision >= 11')
            ->orderBy('primer_apellido')
            ->orderBy('segundo_apellido')
            ->get();

        echo "<center><table border='5px'>
            <tr>
            <th>PRIMER NOMBRE</th>
            <th>PRIMER APELLIDO</th>
            <th>SEGUNDO NOMBRE</th>
            <th>SEGUNDO APELLIDO</th>
            <th>EMAIL</th>
            <th>TELEFONO</th>
            <th>NOTA PAES</th>
            <th>NOTA ADMISION</th>
            <th>ANO INGRESO</th>
            <th></th>
            </tr>";

        foreach ($query20 as $info) {
            echo "<tr>
                <td>$info->primer_nombre</td>
                <td>$info->primer_apellido</td>
                <td>$info->segundo_apellido</td>
                <td>$info->segundo_apellido</td>
                <td>$info->email</td>
                <td>$info->teléfono</td>
                <td>$info->nota_paes</td>
                <td>$info->nota_admision</td>
                <td>$info->ano_ingreso</td>
                </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryTwentyOne()
    {
        $query21 = DB::table('countries')
            ->select('id')
            ->whereIn('name', ['Nicaragua', 'El Salvador', 'Honduras', 'Panamá', 'Guatemala', 'Belice', 'Costa Rica'])
            ->get();

            echo "<center><table border='5px'>
            <tr>
            <th>IDs PAISES CENTROAMERICANOS</th>
            </tr>";

        foreach ($query21 as $grade) {
            echo "<tr>
                <td>$grade->id</td>
                </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryTwentyTwo()
    {
        $query22 = DB::table('states')
            ->select('country_id', DB::raw('count(country_id) as total'))
            ->whereIn('country_id', [30, 154, 90, 70, 99, 4, 159])
            ->groupBy('country_id')
            ->get();

            echo "<center><table border='5px'>
            <tr>
            <th>COUNTRY IDs</th>
            <th>TOTAL STATES</th>
            </tr>";

        foreach ($query22 as $states) {
            echo "<tr>
                <td>$states->country_id</td>
                <td>$states->total</td>
                </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryTwentyThree()
    {
        $query23 = DB::table('states')
            ->select('id', 'name as departamentos')
            ->where('country_id', 90)
            ->get();

            echo "<center><table border='5px'>
            <tr>
            <th>STATE IDs</th>
            <th>STATES</th>
            </tr>";

        foreach ($query23 as $states) {
            echo "<tr>
                <td>$states->id</td>
                <td>$states->departamentos</td>
                </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryTwentyFour()
    {
        $query24 = DB::table('cities')
            ->select('state_id', DB::raw('count(state_id) as cities'))
            ->whereIn('state_id', [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180])
            ->groupBy('state_id')
            ->get();

            echo "<center><table border='5px'>
            <tr>
            <th>CITY IDs</th>
            <th>TOTAL STATES</th>
            </tr>";

        foreach ($query24 as $states) {
            echo "<tr>
                <td>$states->state_id</td>
                <td>$states->cities</td>
                </tr>";
        }
        echo "</table></center>";
    }

    public function showQueryTwentyFive()
    {
        $query25 = DB::table('cities')
            ->select('state_id', 'name')
            ->whereIn('state_id', [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180])
            ->orderByRaw('state_id , name')
            ->get();

            echo "<center><table border='5px'>
            <tr>
            <th>STATE IDs</th>
            <th>CITIES NAME</th>
            </tr>";

        foreach ($query25 as $cities) {
            echo "<tr>
                <td>$cities->state_id</td>
                <td>$cities->name</td>
                </tr>";
        }
        echo "</table></center>";
    }
}
