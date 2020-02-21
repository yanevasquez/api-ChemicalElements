<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Element;
use Faker\Generator as Faker;


$elementos = [
    ["name" => "hidrogenio", "symbol" => "H", "weight" => 1.008],
    ["name" => "helio", "symbol" => "H", "weight" => 4.000],
    ["name" => "litio", "symbol" => "He", "weight" => 6,941],
    ["name" => "berilio", "symbol" => "Be", "weight" => 9,012],
    ["name" => "boro", "symbol" => "B", "weight" => 10,811],
    ["name" => "carbono", "symbol" => "C", "weight" => 12,011],
    ["name" => "nitrogenio", "symbol" => 'N', "weight" => 	14,001],
    ["name" => "oxigenio", "symbol" => "O", "weight" => 15,999],
    ["name" => "fluor", "symbol" => "F", "weight" => 18,998],
    ["name" => "neonio", "symbol" => "Ne", "weight" => 20,179],
    ["name" => "sodio", "symbol" => "Na", "weight" => 22,989],
    ["name" => "magnesio", "symbol" => "Mg", "weight" => 24,305],
    ["name" => "aluminio", "symbol" => "Al", "weight" => 26,981],
    ["name" => "silicio", "symbol" => "Si", "weight" => 20,179],
    ["name" => "fosforo", "symbol" => "P", "weight" => 22,989],
    ["name" => "enxofre", "symbol" => "S", "weight" => 24,305],
    ["name" => "cloro", "symbol" => "Cl", "weight" =>  35.453 ],
    ["name" => "argonio", "symbol" => "Ar", "weight" => 39.948],
    ["name" => "potassio", "symbol" => "K", "weight" => 39.098],
    ["name" => "calcio", "symbol" => "Ca", "weight" =>  40.078],
    ["name" => "escandio", "symbol" => "Sc", "weight" => 44.956],
    ["name" => "titanio", "symbol" => "Ti", "weight" => 47.867],
    ["name" => "vanadio", "symbol" => "V", "weight" => 50.941],
    ["name" => "cromo", "symbol" => "Cr", "weight" => 51.996],
    ["name" => "manganes", "symbol" => "Mn", "weight" => 54.938],
    ["name" => "ferro", "symbol" => "Fe", "weight" => 55.845 ],
    ["name" => "cobalto", "symbol" => "Co", "weight" => 58.933],
    ["name" => "niquel", "symbol" => "Ni", "weight" => 58.693],
    ["name" => "cobre", "symbol" => "Cu", "weight" => 63.546],
    ["name" => "zinco", "symbol" => "Zn", "weight" => 65.409],
    ["name" => "galio", "symbol" => "Ga", "weight" => 69.723],
    ["name" => "germanio", "symbol" => "Ge", "weight" => 72.64],
    ["name" => "arsenio", "symbol" => "As", "weight" => 74.921],
    ["name" => "selenio", "symbol" => "Se", "weight" => 78.960],
    ["name" => "bromo", "symbol" => "Br", "weight" => 79.904],
    ["name" => "criptonio", "symbol" => "Kr", "weight" => 83.798],
    ["name" => "rubidio", "symbol" => "Rb", "weight" => 85.468],
    ["name" => "estroncio", "symbol" => "Sr", "weight" => 87.620],
    ["name" => "itrio", "symbol" => "Y", "weight" => 88.905],
    ["name" => "zirconio", "symbol" => "Zr", "weight" => 91.224],
    ["name" => "niobio", "symbol" => "Nb", "weight" => 92.906 ],
    ["name" => "molibidenio", "symbol" => "Mo", "weight" => 95.940],
    ["name" => "tecnecio", "symbol" => "Tc", "weight" => 98.000],
    ["name" => "rutenio", "symbol" => "Ru", "weight" => 101.070],
    ["name" => "rodio", "symbol" => "Rh", "weight" => 102.905],
    ["name" => "paladio", "symbol" => "Pd", "weight" => 106.420],
    ["name" => "prata", "symbol" => "Ag", "weight" => 107.867],
    ["name" => "cadmio", "symbol" => "Cd", "weight" => 112.411],
    ["name" => "indio", "symbol" => "In", "weight" => 114.818],
    ["name" => "estanho", "symbol" => "Sn", "weight" => 118.710],
    ["name" => "antomonio", "symbol" => "Sb", "weight" => 121.760],
    ["name" => "telurio", "symbol" => "Te", "weight" => 128.600],
    ["name" => "iodo", "symbol" => "I", "weight" => 126.904],
    ["name" => "xenonio", "symbol" => "Xe", "weight" => 131.293],
    ["name" => "cesio", "symbol" => "Cs", "weight" => 132.905],
    ["name" => "bario", "symbol" => "Ba", "weight" => 137.327],
    ["name" => "lantanio", "symbol" => "La", "weight" => 138.905],
    ["name" => "cerio", "symbol" => "Ce", "weight" => 140.116],
    ["name" => "praseodimio", "symbol" => "Pr", "weight" => 140.908],
    ["name" => "neodimio", "symbol" => "Nd", "weight" => 144.242],
    ["name" => "promecio", "symbol" => "Pm", "weight" => 0.000],
    ["name" => "samario", "symbol" => "Sm", "weight" => 150.360],
    ["name" => "europio", "symbol" => "Eu", "weight" => 151.964],
    ["name" => "gadolinio", "symbol" => "Gd", "weight" => 157.250],
    ["name" => "terbio", "symbol" => "Tb", "weight" => 158.925],
    ["name" => "disprosio", "symbol" => "Dy", "weight" => 162.500],
    ["name" => "holmio", "symbol" => "Ho", "weight" => 164.930],
    ["name" => "erbio", "symbol" => "Er", "weight" => 167.259],
    ["name" => "tulio", "symbol" => "Tm", "weight" => 168.934],
    ["name" => "iterbio", "symbol" => "Yb", "weight" => 173.040],
    ["name" => "lutecio", "symbol" => "Lu", "weight" => 174.967],
    ["name" => "hafnio", "symbol" => "Hf", "weight" => 178.490],
    ["name" => "tanlalo", "symbol" => "Ta", "weight" => 180.948],
    ["name" => "tungstenio", "symbol" => "W", "weight" => 183.840],
    ["name" => "renio", "symbol" => "Re", "weight" => 186.207],
    ["name" => "osmio", "symbol" => "Os", "weight" => 190.23],
    ["name" => "iridio", "symbol" => "Ir", "weight" => 192.217],
    ["name" => "platina", "symbol" => "Pt", "weight" => 195.084],
    ["name" => "ouro", "symbol" => "Au", "weight" => 196.966],
    ["name" => "mercurio", "symbol" => "Hg", "weight" => 200.590],
    ["name" => "talio", "symbol" => "Tl", "weight" => 204.383],
    ["name" => "chumbo", "symbol" => "Cu", "weight" => 207.200],
    ["name" => "bismuto", "symbol" => "Bi", "weight" => 208.980],
    ["name" => "polonio", "symbol" => "Po", "weight" => 000.000],
    ["name" => "astato", "symbol" => "At", "weight" => 000.000],
    ["name" => "radonio", "symbol" => "Rn", "weight" => 000.000],
    ["name" => "francio", "symbol" => "Fr", "weight" => 000.000],
    ["name" => "radio", "symbol" => "Ra", "weight" => 000.000],
    ["name" => "actinio", "symbol" => "Ac", "weight" => 000.000],
    ["name" => "torio", "symbol" => "Th", "weight" => 232.038],
    ["name" => "protactinio", "symbol" => "Pa", "weight" => 231.035],
    ["name" => "uranio", "symbol" => "U", "weight" => 238.029],
    ["name" => "neptunio", "symbol" => "Np", "weight" => 000.000],
    ["name" => "plutonio", "symbol" => "Pu", "weight" => 000.000],
    ["name" => "americio", "symbol" => "Am", "weight" => 000.000],
    ["name" => "curio", "symbol" => "Cm", "weight" => 000.000],
    ["name" => "berquelio", "symbol" => "Bk", "weight" => 000.000],
    ["name" => "californio", "symbol" => "Cf", "weight" => 000.000],
    ["name" => "einstenio", "symbol" => "Es", "weight" => 000.000],
    ["name" => "fermio", "symbol" => "Fm", "weight" => 000.000],   
    ["name" => "mendelevio", "symbol" => "Md", "weight" => 000.000],
    ["name" => "nobelio", "symbol" => "No", "weight" => 000.000],
    ["name" => "laurencio", "symbol" => "Lr", "weight" => 000.000],
    ["name" => "rutherfordio", "symbol" => "Rf", "weight" => 000.000],
    ["name" => "dubnio", "symbol" => "Db", "weight" => 000.000],
    ["name" => "seaborgio", "symbol" => "Sg", "weight" => 000.000],
    ["name" => "bonrio", "symbol" => "Bh", "weight" => 000.000],
    ["name" => "hassio", "symbol" => "Hs", "weight" => 000.000],
    ["name" => "meitnerio", "symbol" => "Mt", "weight" => 000.000],
    ["name" => "darmstacio", "symbol" => "Ds", "weight" => 000.000],
    ["name" => "roentgenio", "symbol" => "Rg", "weight" => 000.000],
    ["name" => "copernicio", "symbol" => "Cn", "weight" => 000.000],
    ["name" => "niponio", "symbol" => "Nh", "weight" => 000.000],
    ["name" => "flerovio", "symbol" => "Fl", "weight" => 000.000],
    ["name" => "moscovio", "symbol" => "Ms", "weight" => 000.000],
    ["name" => "livermorio", "symbol" => "Lv", "weight" => 000.000],
    ["name" => "tenesso", "symbol" => "Ts", "weight" => 000.000],
    ["name" => "oganesson", "symbol" => "Og", "weight" => 000.000]
    
];

$factory->define(App\Element::class, function (Faker $faker) use ($elementos){
$elemento= $faker->randomElement($elementos);
    return [
    
        'name' => $elemento['name'],
        'symbol' => $elemento['symbol'],
        'weight' => $elemento['weight']
    ];
});

