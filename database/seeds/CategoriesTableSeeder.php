<?php

use Illuminate\Database\Seeder;
use bayusa\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Categories
        $dataPrincipal = array(
          ["NAME"=>"ABRAZADERAS HIDRAULICAS","DESCRIPTION"=>"ABRAZADERAS HIDRAULICAS","ID"=>1,"SLUG"=>str_slug("abrazaderas hidraulicas")],
          ["NAME"=>"ADAPTADORES PARA LAVADERO","DESCRIPTION"=>"ADAPTADORES PARA LAVADERO","ID"=>2,"SLUG"=>str_slug("adaptadores para lavadero")],
          ["NAME"=>"BRIDAS DE PLASTICO (POLIPROPILENO)","DESCRIPTION"=>"BRIDAS DE PLASTICO (POLIPROPILENO)","ID"=>3,"SLUG"=>str_slug("bridas de plastico (polipropileno)")],
          ["NAME"=>"CESPOL DOBLE CONTRA CANASTA","DESCRIPTION"=>"CESPOL DOBLE CONTRA CANASTA","ID"=>4,"SLUG"=>str_slug("cespol doble contra canasta")],
          ["NAME"=>"CESPOLES PARA CONTRA CANASTA","DESCRIPTION"=>"CESPOLES PARA CONTRA CANASTA","ID"=>5,"SLUG"=>str_slug("cespoles para contra canasta")],
          ["NAME"=>"CESPOLES PARA FREGADERO","DESCRIPTION"=>"CESPOLES PARA FREGADERO","ID"=>6,"SLUG"=>str_slug("cespoles para fregadero")],
          ["NAME"=>"CESPOLES PARA LAVABO","DESCRIPTION"=>"CESPOLES PARA LAVABO","ID"=>7,"SLUG"=>str_slug("cespoles para lavabo")],
          ["NAME"=>"CONECTORES DE HULE","DESCRIPTION"=>"CONECTORES DE HULE","ID"=>8,"SLUG"=>str_slug("conectores de hule")],
          ["NAME"=>"CONEXIONES (PARA MANGUERA DE JARDIN)","DESCRIPTION"=>"CONEXIONES (PARA MANGUERA DE JARDIN)","ID"=>9,"SLUG"=>str_slug("conexiones (para manguera de jardin)")],
          ["NAME"=>"CONEXIONES (PARA POLIDUCTO DE AGUA)","DESCRIPTION"=>"CONEXIONES (PARA POLIDUCTO DE AGUA)","ID"=>10,"SLUG"=>str_slug("conexiones (para poliducto de agua)")],
          ["NAME"=>"CONTRAS DE CESPOL","DESCRIPTION"=>"CONTRAS DE CESPOL","ID"=>11,"SLUG"=>str_slug("contras de cespol")],
          ["NAME"=>"EMPAQUE LIGA ORING (PARA CONEXIONES DE P.V.C.)","DESCRIPTION"=>"EMPAQUE LIGA ORING (PARA CONEXIONES DE P.V.C.)","ID"=>12,"SLUG"=>str_slug("empaque liga oring (para conexiones de p.v.c.)")],
          ["NAME"=>"EMPAQUE ORING  (PARA LLAVES Y MEZCLADORAS)","DESCRIPTION"=>"EMPAQUE ORING  (PARA LLAVES Y MEZCLADORAS)","ID"=>13,"SLUG"=>str_slug("empaque oring  (para llaves y mezcladoras)")],
          ["NAME"=>"EMPAQUES (PARA HERRAJES WC)","DESCRIPTION"=>"EMPAQUES (PARA HERRAJES WC)","ID"=>14,"SLUG"=>str_slug("empaques (para herrajes wc)")],
          ["NAME"=>"EMPAQUES (PARA CESPOL LAVABO, FREGADERO Y CONTRA CANASTA)","DESCRIPTION"=>"EMPAQUES (PARA CESPOL LAVABO, FREGADERO Y CONTRA CANASTA)","ID"=>15,"SLUG"=>str_slug("empaques (para cespol lavabo, fregadero y contra canasta)")],
          ["NAME"=>"EMPAQUES PARA CONEXION DE MANGUERA","DESCRIPTION"=>"EMPAQUES PARA CONEXION DE MANGUERA","ID"=>16,"SLUG"=>str_slug("empaques para conexion de manguera")],
          ["NAME"=>"EMPAQUES PARA LLAVE (CÓNICOS)","DESCRIPTION"=>"EMPAQUES PARA LLAVE (CÓNICOS)","ID"=>17,"SLUG"=>str_slug("empaques para llave (cónicos)")],
          ["NAME"=>"EMPAQUES PARA LLAVE (PLANOS)","DESCRIPTION"=>"EMPAQUES PARA LLAVE (PLANOS)","ID"=>18,"SLUG"=>str_slug("empaques para llave (planos)")],
          ["NAME"=>"EMPAQUES PARA PISTOLA DE PINTAR","DESCRIPTION"=>"EMPAQUES PARA PISTOLA DE PINTAR","ID"=>19,"SLUG"=>str_slug("empaques para pistola de pintar")],
          ["NAME"=>"EMPAQUES VARIOS","DESCRIPTION"=>"EMPAQUES VARIOS","ID"=>20,"SLUG"=>str_slug("empaques varios")],
          ["NAME"=>"HERRAJES W. C.","DESCRIPTION"=>"HERRAJES W. C.","ID"=>21,"SLUG"=>str_slug("herrajes w. c.")],
          ["NAME"=>"LLAVES DE LLENADO PARA TANQUE ALTO (TINACO)","DESCRIPTION"=>"LLAVES DE LLENADO PARA TANQUE ALTO (TINACO)","ID"=>22,"SLUG"=>str_slug("llaves de llenado para tanque alto (tinaco)")],
          ["NAME"=>"LLAVES, CHIFLON Y COMPLEMENTOS","DESCRIPTION"=>"LLAVES, CHIFLON Y COMPLEMENTOS","ID"=>23,"SLUG"=>str_slug("llaves, chiflon y complementos")],
          ["NAME"=>"REGATONES (PARA SILLAS, MESAS, BASTONES Y MULETAS)","DESCRIPTION"=>"REGATONES (PARA SILLAS, MESAS, BASTONES Y MULETAS)","ID"=>24,"SLUG"=>str_slug("regatones (para sillas, mesas, bastones y muletas)")],
          ["NAME"=>"REPUESTOS (PARA HERRAJES  W.C.)","DESCRIPTION"=>"REPUESTOS (PARA HERRAJES  W.C.)","ID"=>25,"SLUG"=>str_slug("repuestos (para herrajes  w.c.)")],
          ["NAME"=>"REPUESTOS (PARA CESPOL LAVABO, FREGADERO Y CONTRA CANASTA)","DESCRIPTION"=>"REPUESTOS (PARA CESPOL LAVABO, FREGADERO Y CONTRA CANASTA)","ID"=>26,"SLUG"=>str_slug("repuestos (para cespol lavabo, fregadero y contra canasta)")],
          ["NAME"=>"TAPONES (PARA CESPOL LAVABO, LAVADERO, FREGADERO Y TINA DE BAÑO)","DESCRIPTION"=>"TAPONES (PARA CESPOL LAVABO, LAVADERO, FREGADERO Y TINA DE BAÑO)","ID"=>27,"SLUG"=>str_slug("tapones (para cespol lavabo, lavadero, fregadero y tina de baño)")],
          ["NAME"=>"TAQUETES DE PLASTICO (POLIPROPILENO)","DESCRIPTION"=>"TAQUETES DE PLASTICO (POLIPROPILENO)","ID"=>28,"SLUG"=>str_slug("taquetes de plastico (polipropileno)")],
          ["NAME"=>"TRAMPAS DOBLE CONTRA CANASTA","DESCRIPTION"=>"TRAMPAS DOBLE CONTRA CANASTA","ID"=>29,"SLUG"=>str_slug("trampas doble contra canasta")],
          ["NAME"=>"TRAMPAS PARA CESPOL","DESCRIPTION"=>"TRAMPAS PARA CESPOL","ID"=>30,"SLUG"=>str_slug("trampas para cespol")],
          ["NAME"=>"TUERCAS (PARA HERRAJES WC)","DESCRIPTION"=>"TUERCAS (PARA HERRAJES WC)","ID"=>31,"SLUG"=>str_slug("tuercas (para herrajes wc)")],
          ["NAME"=>"TUERCAS (PARA CESPOL LAVABO, FREGADERO Y CONTRA CANASTA)","DESCRIPTION"=>"TUERCAS (PARA CESPOL LAVABO, FREGADERO Y CONTRA CANASTA)","ID"=>32,"SLUG"=>str_slug("tuercas (para cespol lavabo, fregadero y contra canasta)")],
          ["NAME"=>"VALVULAS  DE TANQUE BAJO (LLENADO)","DESCRIPTION"=>"VALVULAS  DE TANQUE BAJO (LLENADO)","ID"=>33,"SLUG"=>str_slug("valvulas  de tanque bajo (llenado)")],
          ["NAME"=>"VALVULAS RANAS Y PERAS","DESCRIPTION"=>"VALVULAS RANAS Y PERAS","ID"=>34,"SLUG"=>str_slug("valvulas ranas y peras")],
          ["NAME"=>"VALVULAS REBOSADERO (DESCARGA)","DESCRIPTION"=>"VALVULAS REBOSADERO (DESCARGA)","ID"=>35,"SLUG"=>str_slug("valvulas rebosadero (descarga)")
          ]);
        Category::insert($dataPrincipal);
    }
}
