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
        $query1 = DB::table('cities')->select('*')->orderBy('name', 'ASC')->get();

        print_r($query1);
        // 1. SELECT * FROM cities ORDER BY name ASC;

    }

    public function showQueryTwo()
    {
        $query2 = DB::table('cities')->select('*')->orderBy('name', 'DESC')->get();

        print_r($query2);
        // 2. SELECT * FROM cities ORDER BY name DESC;
        
    }

    public function showQueryThree()
    {
        $query3 = DB::table('countries')
            ->select('name as spanish_name', 'name_en as english_name')
            ->orderByRaw('spanish_name ASC, english_name ASC')
            ->get();

            print_r($query3);
        // 3. SELECT name AS spanish_name, name_en AS english_name FROM countries ORDER BY spanish_name ASC, english_name ASC;
    }

    public function showQueryFour()
    {
        $query4 = DB::table('cities')->select('*')->where('name', 'LIKE', "San%")->get();

        print_r($query4);
        // 4. SELECT * FROM cities WHERE name LIKE 'San %';
    }

    public function showQueryFive()
    {
        $query5 = DB::table('countries')->select('id')->where('name', 'Guatemala')->get();

        print_r($query5);
        // 5. SELECT id FROM countries WHERE name='Guatemala';
    }

    public function showQuerySix()
    {
        $query6 = DB::table('states')->select('name as guatemala_states')
            ->where('country_id', 70)
            ->orderBy('name')
            ->get();

            print_r($query6);
        // 6. SELECT name AS guatemala_states FROM states WHERE country_id = 70 ORDER BY name;
    }

    public function showQuerySeven()
    {
        $query7 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'email')
            ->where('teléfono', 'LIKE', "6%")
            ->get();

            print_r($query7);
        // 7. SELECT primer_nombre,primer_apellido, email FROM students WHERE teléfono LIKE '6%';
    }

    public function showQueryEight()
    {
        $query8 = DB::table('students')->where('carrera', 'Ingeniería en Sistemas')->count('carrera');

        print_r($query8);
        // 8. SELECT COUNT(carrera) FROM students WHERE carrera = 'Ingeniería en Sistemas';
    }

    public function showQueryNine()
    {
        $query9 = DB::table('students')
            ->select('primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'nota_paes')
            ->where('carrera', 'Ingeniería en Sistemas')
            ->whereBetween('ano_ingreso', [2000, 2010])
            ->orderBy('nota_paes', 'ASC')
            ->get();

            print_r($query9);
        // 9. SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, nota_paes FROM students 
        // WHERE carrera = 'Ingeniería en Sistemas' AND ano_ingreso BETWEEN 2000 AND 2010 ORDER BY nota_paes ASC;
    }

    public function showQueryTen()
    {
        $query10 = DB::table('students')->select(DB::raw('ROUND(AVG(nota_paes),2'))->get();

        print_r($query10);
        // 10. SELECT ROUND(AVG(nota_paes), 2) FROM students;
    }

    public function showQueryEleven()
    {
        $query11 = DB::table('students')->select(DB::raw('ROUND(AVG(nota_admision),2'))->get();

        print_r($query11);
        // 11. SELECT ROUND(AVG(nota_admision), 2) FROM students;
    }

    public function showQueryTwelve()
    {
        $query12 = DB::table('students')
            ->select(DB::raw('*, ROUND((nota_paes + nota_admision)/2,2) as promedio_paes_admision'))
            ->orderBy('promedio_paes_admision', 'DESC')
            ->get();

            print_r($query12);
        // 12. SELECT *, ROUND((nota_paes + nota_admision)/2, 2) AS promedio_paes_admision FROM students
        // ORDER BY promedio_paes_admision DESC;
    }

    public function showQueryThirteen()
    {
        $query13 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'teléfono', 'nota_paes')
            ->orderBy('nota_paes', 'DESC')
            ->take(20)
            ->get();

            print_r($query13);
        // 13. SELECT primer_nombre, primer_apellido, teléfono, nota_paes FROM students ORDER BY nota_paes DESC LIMIT 20;
    }

    public function showQueryFourteen()
    {
        $query14 = DB::table('students')
            ->select('carrera', DB::raw('ROUND(AVG(nota_admision),2) as promedio_nota_de_admision'))
            ->groupBy('carrera')
            ->get();

            print_r($query14);
        // 14. SELECT carrera, ROUND(AVG(nota_admision), 2) AS promedio_nota_de_admision FROM students GROUP BY carrera;
    }

    public function showQueryFifteen()
    {
        $query15 = DB::table('students')
            ->select('ano_ingreso')
            ->groupBy('ano_ingreso')
            ->count('ano_ingreso as enrolled_students');

            print_r($query15);
        // 15. SELECT ano_ingreso, COUNT(ano_ingreso) AS enrolled_students FROM students GROUP BY ano_ingreso;
    }

    public function showQuerySixteen()
    {
        $query16 = DB::table('students')
            ->select('*')
            ->where('nota_paes', '<=', 6)
            ->orderBy('nota_paes', 'DESC')
            ->get();

            print_r($query16);
        // 16. SELECT * FROM students WHERE nota_paes <= 6 ORDER BY nota_paes DESC;
    }

    public function showQuerySeventeen()
    {
        $query17 = DB::table('students')
            ->select('*')
            ->where('nota_paes', '<=', 6)
            ->where('nota_admision', '<=', 6)
            ->get();

            print_r($query17);
        // 17. SELECT * FROM students WHERE nota_paes <= 6 AND nota_admision <= 6;
    }

    public function showQueryEighteen()
    {
        $query18 = DB::table('students')
            ->select('carrera', 'nota_admision')
            ->where('nota_admision', '<', 7)
            ->orderBy('nota_admision', 'ASC')
            ->get();

            print_r($query18);
        // 18. SELECT carrera, nota_admision FROM students WHERE nota_admision < 7 ORDER BY nota_admision ASC;
    }

    public function showQueryNineteen()
    {
        $query19 = DB::table('students')
            ->select('carrera', 'nota_admision')
            ->where('nota_admision', '>', 7)
            ->orderBy('nota_admision', 'DESC')
            ->get();

            print_r($query19);
        // 19. SELECT carrera, nota_admision FROM students WHERE nota_admision > 7 ORDER BY nota_admision DESC;
    }

    public function showQueryTwenty()
    {
        $query20 = DB::table('students')
            ->select('*')
            ->where('primer_apellido', 'LIKE', "A%")
            ->where('email', 'LIKE', "%gmail%")
            ->where('ano_ingreso', '<', 2010)
            ->where('nota_paes + nota_admision', '>=', 11)
            ->orderByRaw('primer_apellido , segundo_apellido')
            ->get();

            print_r($query20);

        // 20. SELECT * FROM students WHERE primer_apellido 
        // LIKE 'A%' AND email LIKE '%gmail%' AND ano_ingreso < 2010 AND (nota_paes + nota_admision) >= 11 
        // ORDER BY primer_apellido, segundo_apellido;
    }

    public function showQueryTwentyOne()
    {
        $query21 = DB::table('countries')
            ->select('id')
            ->whereIn('name', ['Nicaragua', 'El Salvador', 'Honduras', 'Panamá', 'Guatemala', 'Belice', 'Costa Rica'])
            ->get();

            print_r($query21);

        // 21. SELECT id FROM countries 
        // WHERE name = 'Nicaragua' OR name = 'El Salvador' OR name = 'Honduras' OR name = 'Panamá' OR name = 'Guatemala' 
        // OR name = 'Belice' OR name = 'Costa Rica';
    }

    public function showQueryTwentyTwo()
    {
        $query22 = DB::table('states')
            ->select('country_id')
            ->whereIn('country_id', [30, 154, 90, 70, 99, 4, 159])
            ->groupBy('country_id')
            ->count('country_id');

            print_r($query22);

        // 22. SELECT country_id, COUNT(country_id) FROM states WHERE country_id IN(30,154,90,70,99,4,159) GROUP BY country_id;
    }

    public function showQueryTwentyThree()
    {
        $query23 = DB::table('states')
            ->select('id', 'name as departamentos')
            ->where('country_id', 90)
            ->get();

            print_r($query23);
        // 23. SELECT id, name AS departamentos FROM states WHERE country_id=90;
    }

    public function showQueryTwentyFour()
    {
        $query24 = DB::table('cities')
            ->select('state_id')
            ->whereIn('state_id', [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180])
            ->groupBy('state_id')
            ->count('state_id as municipios');

            print_r($query24);
        // 24. SELECT state_id, COUNT(state_id) AS municipios FROM cities 
        // WHERE state_id IN(1167,1168,1169,1170,1171,1172,1173,1174,1175,1176,1177,1178,1179,1180) GROUP BY state_id;
    }

    public function showQueryTwentyFive()
    {
        $query25 = DB::table('cities')
            ->select('state_id', 'name')
            ->whereIn('state_id', [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180])
            ->orderByRaw('state_id , name')
            ->get();

            print_r($query25);
        // 25. SELECT state_id, name FROM cities 
        // WHERE state_id IN(1167,1168,1169,1170,1171,1172,1173,1174,1175,1176,1177,1178,1179,1180) ORDER BY state_id, name;
    }
}
