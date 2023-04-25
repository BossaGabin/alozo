<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->insert([
            [
               
                'code' => "AO",
                'name' => "Angola",
                'statuts' => false,
            ],
            [
               
                'code' => "AI",
                'name' => "Anguilla",
                'statuts' => false,
            ],
            [
               
                'code' => "AQ",
                'name' => "Antarctique",
                'statuts' => false,
            ],
            [
                
                'code' => "AG",
                'name' => "Antigua-et-Barbuda",
                'statuts' => false,
            ],
            [
                
                'code' => "AN",
                'name' => "Antilles néerlandaises",
                'statuts' => false,
            ],
            [
                
                'code' => "SA",
                'name' => "Arabie saoudite",
                'statuts' => false,
            ],
            [
                
                'code' => "AR",
                'name' => "Argentine",
                'statuts' => false,
            ],
            [
                
                'code' => "AM",
                'name' => "Arménie",
                'statuts' => false,
            ],
            [
                
                'code' => "AW",
                'name' => "Aruba",
                'statuts' => false,
            ],
            [
                
                'code' => "AU",
                'name' => "Australie",
                'statuts' => false,
            ],

            [                
                'code' => "AZ",
                'name' => "Azerbaïdjan",
                'statuts' => false,
            ],
            [                
                'code' => "AZ",
                'name' => "Azerbaïdjan",
                'statuts' => false,
            ],
            [                
                'code' => "BS",
                'name' => "Bahamas",
                'statuts' => false,
            ],
            [                
                'code' => "BH",
                'name' => "Bahreïn",
                'statuts' => false,
            ],
            [                
                'code' => "BD",
                'name' => "Bangladesh",
                'statuts' => false,
            ],
            [                
                'code' => "BB",
                'name' => "Bardade",
                'statuts' => false,
            ],
            [                
                'code' => "BY",
                'name' => "Bélarus",
                'statuts' => false,
            ],
            [                
                'code' => "BE",
                'name' => "Belgique",
                'statuts' => false,
            ],
            [                
                'code' => "BZ",
                'name' => "Belize",
                'statuts' => false,
            ],
            [                
                'code' => "BJ",
                'name' => "Bénin",
                'statuts' => true,
            ],
            [                
                'code' => "BM",
                'name' => "Bermudes",
                'statuts' => false,
            ],
            [                
                'code' => "BT",
                'name' => "Bhoutan",
                'statuts' => false,
            ],
            [                
                'code' => "BO",
                'name' => "Bolivi",
                'statuts' => false,
            ],
            [                
                'code' => "BA",
                'name' => "Bosnie-Herzégovine",
                'statuts' => false,
            ],
            [                
                'code' => "BW",
                'name' => "Botswana",
                'statuts' => false,
            ],
            [                
                'code' => "BR",
                'name' => "Brésil",
                'statuts' => false,
            ],
            [                
                'code' => "BN",
                'name' => "Brunéi Darussalam",
                'statuts' => false,
            ], 
            [                
                'code' => "BG",
                'name' => "Bulgarie",
                'statuts' => false,
            ], 
            [                
                'code' => "BF",
                'name' => "Burkina Faso",
                'statuts' => false,
            ], 
            [                
                'code' => "BI",
                'name' => "Burundi",
                'statuts' => false,
            ], 
            [                
                'code' => "KH",
                'name' => "Cambodge",
                'statuts' => false,
            ], 
            [                
                'code' => "CM",
                'name' => "Cameroun",
                'statuts' => false,
            ], 
            [                
                'code' => "CA",
                'name' => "Canada",
                'statuts' => false,
            ], 
            [                
                'code' => "CV",
                'name' => "Cap-Vert",
                'statuts' => false,
            ], 
            [                
                'code' => "EA",
                'name' => "Ceuta et Melilla",
                'statuts' => false,
            ], 
            [                
                'code' => "CL",
                'name' => "Chili",
                'statuts' => false,
            ], 
            [                
                'code' => "CN",
                'name' => "Chine",
                'statuts' => false,
            ], 
            [                
                'code' => "CY",
                'name' => "Chypre",
                'statuts' => false,
            ], 
            [                
                'code' => "CO",
                'name' => "Colombie",
                'statuts' => false,
            ], 
            [                
                'code' => "KM",
                'name' => "Comores",
                'statuts' => false,
            ], 
            [                
                'code' => "CG",
                'name' => "Congo-Brazzaville",
                'statuts' => false,
            ], 
            [                
                'code' => "KP",
                'name' => "Corée du Nord",
                'statuts' => false,
            ], 
            [                
                'code' => "KR",
                'name' => "Corée du Sud",
                'statuts' => false,
            ], 
            [                
                'code' => "CR",
                'name' => "Costa Rica",
                'statuts' => false,
            ], 
            [                
                'code' => "CI",
                'name' => "Côte d’Ivoire",
                'statuts' => false,
            ], 
            [                
                'code' => "HR",
                'name' => "Croatie",
                'statuts' => false,
            ], 
            [                
                'code' => "CU",
                'name' => "Cuba",
                'statuts' => false,
            ], 
            [                
                'code' => "DK",
                'name' => "Danemark",
                'statuts' => false,
            ], 
            [                
                'code' => "DG",
                'name' => "Diego Garcia",
                'statuts' => false,
            ], 
            [                
                'code' => "DJ",
                'name' => "Djibouti",
                'statuts' => false,
            ], 
            [                
                'code' => "DM",
                'name' => "Dominique",
                'statuts' => false,
            ], 
            [                
                'code' => "EG",
                'name' => "Égypte",
                'statuts' => false,
            ], 
            [                
                'code' => "SV",
                'name' => "El Salvador",
                'statuts' => false,
            ], 
            [                
                'code' => "AE",
                'name' => "Émirats arabes unis",
                'statuts' => false,
            ], 
            [                
                'code' => "EC",
                'name' => "Équateur",
                'statuts' => false,
            ], 
            [                
                'code' => "ER",
                'name' => "Érythrée",
                'statuts' => false,
            ], 
            [                
                'code' => "ES",
                'name' => "Espagne",
                'statuts' => false,
            ], 
            [                
                'code' => "EE",
                'name' => "Estonie",
                'statuts' => false,
            ], 
            [                
                'code' => "VA",
                'name' => "État de la Cité du Vatican",
                'statuts' => false,
            ], 
            [                
                'code' => "FM",
                'name' => "États fédérés de Micronésie",
                'statuts' => false,
            ],
            [                
                'code' => "US",
                'name' => "États-Unis",
                'statuts' => false,
            ],
            [                
                'code' => "ET",
                'name' => "Éthiopie",
                'statuts' => false,
            ],
            [                
                'code' => "FJ",
                'name' => "Fidji",
                'statuts' => false,
            ],
            [                
                'code' => "FI",
                'name' => "Finlande",
                'statuts' => false,
            ],
            [                
                'code' => "FR",
                'name' => "France",
                'statuts' => false,
            ],
            [                
                'code' => "GA",
                'name' => "Gabon",
                'statuts' => false,
            ],
            [                
                'code' => "GM",
                'name' => "Gambie",
                'statuts' => false,
            ],
            [                
                'code' => "GE",
                'name' => "Géorgie",
                'statuts' => false,
            ],
            [                
                'code' => "GS",
                'name' => "Géorgie du Sud et les îles Sandwich du Sud",
                'statuts' => false,
            ],
            [                
                'code' => "GI",
                'name' => "Gibraltar",
                'statuts' => false,
            ],
            [                
                'code' => "GR",
                'name' => "Grèce",
                'statuts' => false,
            ],
            [                
                'code' => "GD",
                'name' => "Grenade",
                'statuts' => false,
            ],
            [                
                'code' => "GL",
                'name' => "Groenland",
                'statuts' => false,
            ],
            [                
                'code' => "GP",
                'name' => "Guadeloupe",
                'statuts' => false,
            ],
            [                
                'code' => "GU",
                'name' => "Guam",
                'statuts' => false,
            ],
            [                
                'code' => "GT",
                'name' => "Guatemala",
                'statuts' => false,
            ],
            [                
                'code' => "GG",
                'name' => "Guernesey",
                'statuts' => false,
            ],
            [                
                'code' => "GN",
                'name' => "Guinée",
                'statuts' => false,
            ],
            [                
                'code' => "GQ",
                'name' => "Guinée équatoriale",
                'statuts' => false,
            ],
            [                
                'code' => "GW",
                'name' => "Guinée-Bissau",
                'statuts' => false,
            ],
            [                
                'code' => "GY",
                'name' => "Guyana",
                'statuts' => false,
            ],
            [                
                'code' => "GF",
                'name' => "Guyane française",
                'statuts' => false,
            ],
            [                
                'code' => "HT",
                'name' => "Haïti",
                'statuts' => false,
            ],
            [                
                'code' => "HN",
                'name' => "Honduras",
                'statuts' => false,
            ],
            [                
                'code' => "HU",
                'name' => "Hongrie",
                'statuts' => false,
            ],
            [                
                'code' => "BV",
                'name' => "Île Bouvet",
                'statuts' => false,
            ],
            [                
                'code' => "CX",
                'name' => "Île Christmas",
                'statuts' => false,
            ],
            [                
                'code' => "CP",
                'name' => "Île Clipperton",
                'statuts' => false,
            ],
            [                
                'code' => "AC",
                'name' => "Île de l'Ascension",
                'statuts' => false,
            ],
            [                
                'code' => "IM",
                'name' => "Île de Man",
                'statuts' => false,
            ],
            [                
                'code' => "NF",
                'name' => "Île Norfolk",
                'statuts' => false,
            ],
            [                
                'code' => "AX",
                'name' => "Îles Åland",
                'statuts' => false,
            ],
            [                
                'code' => "KY",
                'name' => "Îles Caïmans",
                'statuts' => false,
            ],
            [                
                'code' => "IC",
                'name' => "Îles Canaries",
                'statuts' => false,
            ],
            [                
                'code' => "CC",
                'name' => "Îles Cocos - Keeling",
                'statuts' => false,
            ],
            [                
                'code' => "CK",
                'name' => "Îles Cook",
                'statuts' => false,
            ],
            [                
                'code' => "FO",
                'name' => "Îles Féroé",
                'statuts' => false,
            ],
            [                
                'code' => "HM",
                'name' => "Îles Heard et MacDonald",
                'statuts' => false,
            ],
            [                
                'code' => "FK",
                'name' => "Îles Malouines",
                'statuts' => false,
            ],
            [                
                'code' => "MP",
                'name' => "Îles Mariannes du Nord",
                'statuts' => false,
            ],
            [                
                'code' => "MH",
                'name' => "Îles Marshall",
                'statuts' => false,
            ],
            [                
                'code' => "UM",
                'name' => "Îles Mineures Éloignées des États-Unis",
                'statuts' => false,
            ],
            [                
                'code' => "SB",
                'name' => "Îles Salomon",
                'statuts' => false,
            ],
            [                
                'code' => "TC",
                'name' => "Îles Turks et Caïques",
                'statuts' => false,
            ],
            [                
                'code' => "VG",
                'name' => "Îles Vierges britanniques",
                'statuts' => false,
            ],
            [                
                'code' => "VI",
                'name' => "Îles Vierges des États-Unis",
                'statuts' => false,
            ],
            [                
                'code' => "IN",
                'name' => "Inde",
                'statuts' => false,
            ],
            [                
                'code' => "ID",
                'name' => "Indonésie",
                'statuts' => false,
            ],
            [                
                'code' => "IQ",
                'name' => "Irak",
                'statuts' => false,
            ],
            [                
                'code' => "IR",
                'name' => "Iran",
                'statuts' => false,
            ],
            [                
                'code' => "IE",
                'name' => "Irlande",
                'statuts' => false,
            ],
            [                
                'code' => "IS",
                'name' => "Islande",
                'statuts' => false,
            ],
            [                
                'code' => "IL",
                'name' => "Israël",
                'statuts' => false,
            ],
            [                
                'code' => "IT",
                'name' => "Italie",
                'statuts' => false,
            ],
            [                
                'code' => "JM",
                'name' => "Jamaïque",
                'statuts' => false,
            ],
            [                
                'code' => "JP",
                'name' => "Japon",
                'statuts' => false,
            ],
            [                
                'code' => "JE",
                'name' => "Jersey",
                'statuts' => false,
            ],
            [                
                'code' => "JO",
                'name' => "Jordanie",
                'statuts' => false,
            ],
            [                
                'code' => "KZ",
                'name' => "Kazakhstan",
                'statuts' => false,
            ],
            [                
                'code' => "KE",
                'name' => "Kenya",
                'statuts' => false,
            ],
            [                
                'code' => "KG",
                'name' => "Kirghizistan",
                'statuts' => false,
            ],
            [                
                'code' => "KI",
                'name' => "Kiribati",
                'statuts' => false,
            ],
            [                
                'code' => "KW",
                'name' => "Koweït",
                'statuts' => false,
            ],
            [                
                'code' => "LA",
                'name' => "Laos",
                'statuts' => false,
            ],
            [                
                'code' => "LS",
                'name' => "Lesotho",
                'statuts' => false,
            ],
            [                
                'code' => "LV",
                'name' => "Lettonie",
                'statuts' => false,
            ],
            [                
                'code' => "LB",
                'name' => "Liban",
                'statuts' => false,
            ],
            [                
                'code' => "LR",
                'name' => "Libéria",
                'statuts' => false,
            ],
            [                
                'code' => "LY",
                'name' => "Libye",
                'statuts' => false,
            ],
            [                
                'code' => "LI",
                'name' => "Liechtenstein",
                'statuts' => false,
            ],
            [                
                'code' => "LT",
                'name' => "Lituanie",
                'statuts' => false,
            ],
            [                
                'code' => "LU",
                'name' => "Luxembourg",
                'statuts' => false,
            ],
            [                
                'code' => "MK",
                'name' => "Macédoine",
                'statuts' => false,
            ],
            [                
                'code' => "MG",
                'name' => "Madagascar",
                'statuts' => false,
            ],
            [                
                'code' => "MY",
                'name' => "Malaisie",
                'statuts' => false,
            ],
            [                
                'code' => "MW",
                'name' => "Malawi",
                'statuts' => false,
            ],
            [                
                'code' => "MV",
                'name' => "Maldives",
                'statuts' => false,
            ],
            [                
                'code' => "ML",
                'name' => "Mali",
                'statuts' => false,
            ],
            [                
                'code' => "MT",
                'name' => "Malte",
                'statuts' => false,
            ],
            [                
                'code' => "MA",
                'name' => "Maroc",
                'statuts' => false,
            ],
            [                
                'code' => "MQ",
                'name' => "Martinique",
                'statuts' => false,
            ],
            [                
                'code' => "MU",
                'name' => "Maurice",
                'statuts' => false,
            ],
            [                
                'code' => "MR",
                'name' => "Mauritanie",
                'statuts' => false,
            ],
            [                
                'code' => "YT",
                'name' => "Mayotte",
                'statuts' => false,
            ],
            [                
                'code' => "MX",
                'name' => "Mexique",
                'statuts' => false,
            ],
            [                
                'code' => "MD",
                'name' => "Moldavie",
                'statuts' => false,
            ],
            [                
                'code' => "MC",
                'name' => "Monaco",
                'statuts' => false,
            ],
            [                
                'code' => "MN",
                'name' => "Mongolie",
                'statuts' => false,
            ],
            [                
                'code' => "ME",
                'name' => "Monténégro",
                'statuts' => false,
            ],
            [                
                'code' => "MS",
                'name' => "Montserrat",
                'statuts' => false,
            ],
            [                
                'code' => "MZ",
                'name' => "Mozambique",
                'statuts' => false,
            ],
            [                
                'code' => "MM",
                'name' => "Myanmar",
                'statuts' => false,
            ],
            [                
                'code' => "NA",
                'name' => "Namibie",
                'statuts' => false,
            ],
            [                
                'code' => "NR",
                'name' => "Nauru",
                'statuts' => false,
            ],
            [                
                'code' => "NP",
                'name' => "Népal",
                'statuts' => false,
            ],
            [                
                'code' => "NI",
                'name' => "Nicaragua",
                'statuts' => false,
            ],
            [                
                'code' => "NE",
                'name' => "Niger",
                'statuts' => false,
            ],
            [                
                'code' => "NG",
                'name' => "Nigéria",
                'statuts' => false,
            ],
            [                
                'code' => "NU",
                'name' => "Niue",
                'statuts' => false,
            ],
            [                
                'code' => "NO",
                'name' => "Norvège",
                'statuts' => false,
            ],
            [                
                'code' => "NC",
                'name' => "Nouvelle-Calédonie",
                'statuts' => false,
            ],
            [                
                'code' => "NZ",
                'name' => "Nouvelle-Zélande",
                'statuts' => false,
            ],
            [                
                'code' => "OM",
                'name' => "Oman",
                'statuts' => false,
            ],
            [                
                'code' => "UG",
                'name' => "Ouganda",
                'statuts' => false,
            ],
            [                
                'code' => "UZ",
                'name' => "Ouzbékistan",
                'statuts' => false,
            ],
            [                
                'code' => "PK",
                'name' => "Pakistan",
                'statuts' => false,
            ],
            [                
                'code' => "PW",
                'name' => "Palaos",
                'statuts' => false,
            ],
            [                
                'code' => "PA",
                'name' => "Panama",
                'statuts' => false,
            ],
            [                
                'code' => "PG",
                'name' => "Papouasie-Nouvelle-Guinée",
                'statuts' => false,
            ],
            [                
                'code' => "PY",
                'name' => "Paraguay",
                'statuts' => false,
            ],
            [                
                'code' => "NL",
                'name' => "Pays-Bas",
                'statuts' => false,
            ],
            [                
                'code' => "PE",
                'name' => "Pérou",
                'statuts' => false,
            ],
            [                
                'code' => "PH",
                'name' => "Philippines",
                'statuts' => false,
            ],
            [                
                'code' => "PN",
                'name' => "Pitcairn",
                'statuts' => false,
            ],
            [                
                'code' => "PL",
                'name' => "Pologne",
                'statuts' => false,
            ],
            [                
                'code' => "PF",
                'name' => "Polynésie française",
                'statuts' => false,
            ],
            [                
                'code' => "PR",
                'name' => "Porto Rico",
                'statuts' => false,
            ],
            [                
                'code' => "PT",
                'name' => "Portugal",
                'statuts' => false,
            ],
            [                
                'code' => "QA",
                'name' => "Qatar",
                'statuts' => false,
            ],
            [                
                'code' => "HK",
                'name' => "R.A.S. chinoise de Hong Kong",
                'statuts' => false,
            ],
            [                
                'code' => "MO",
                'name' => "R.A.S. chinoise de Macao",
                'statuts' => false,
            ],
            [
                'code'=> "QO",
                'name'=>  "régions éloignées de l’Océanie",
                'statuts'=>false
              ],
              [
                'code'=> "CF",
                'name'=> "République centrafricaine",
                'statuts'=>false
              ],
              
              [
                'code'=> "CD",
                'name'=>  "République démocratique du Congo",
                'statuts'=>false
              ],
              [
                'code'=> "DO",
                'name'=>  "République dominicaine",
                'statuts'=>false
              ],
              [
                'code'=> "CZ",
                'name'=>  "République tchèque",
                'statuts'=>false
              ],
              [
                'code'=> "RE",
                'name'=>  "Réunion",
                'statuts'=>false
              ],
              [
                'code'=> "RO",
                'name'=>  "Roumanie",
                'statuts'=>false
              ],
              [
                'code'=> "GB",
                'name'=>  "Royaume-Uni",
                'statuts'=>false
              ],
              [
                'code'=> "RU",
                'name'=>  "Russie",
                'statuts'=>false
              ],
              
              [
                'code'=> "RW",
                'name'=>  "Rwanda",
                'statuts'=>false
              ],
              [
                'code'=> "EH",
                'name'=>  "Sahara occidental",
                'statuts'=>false
              ],
              [
                'code'=> "BL",
                'name'=>  "Saint-Barthélémy",
                'statuts'=>false
              ],
              [
                'code'=> "KN",
                'name'=>  "Saint-Kitts-et-Nevis",
                'statuts'=>false
              ],
              [
                'code'=> "SM",
                'name'=>  "Saint-Marin",
                'statuts'=>false
              ],
              [
                'code'=> "MF",
                'name'=>  "Saint-Martin",
                'statuts'=>false
              ],
              
              [
                'code'=> "PM",
                'name'=>  "Saint-Pierre-et-Miquelon",
                'statuts'=>false
              ],
              [
                'code'=> "VC",
                'name'=> "Saint-Vincent-et-les Grenadines",
                'statuts'=>false
              ],
              [
                'code'=> "SH",
                'name'=> "Sainte-Hélène",
                'statuts'=>false
              ],
              [
                'code'=> "LC",
                'name'=> "Sainte-Lucie",
                'statuts'=>false
              ],
              [
                'code'=> "WS",
                'name'=> "Samoa",
                'statuts'=>false
              ],
              [
                'code'=> "AS",
                'name'=> "Samoa américaines",
                'statuts'=>false
              ],
              [
                'code'=> "ST",
                'name'=> "Sao Tomé-et-Principe",
                'statuts'=>false
              ],
              [
                'code'=> "SN",
                'name'=> "Sénégal",
                'statuts'=>false
              ],
              [
                'code'=> "RS",
                'name'=> "Serbie",
                'statuts'=>false
              ],
              [
                'code'=> "CS",
                'name'=> "Serbie-et-Monténégro",
                'statuts'=>false
              ],
              [
                'code'=> "SC",
                'name'=> "Seychelles",
                'statuts'=>false
              ],
              [
                'code'=> "SL",
                'name'=> "Sierra Leone",
                'statuts'=>false
              ],
              [
                'code'=> "SG",
                'name'=> "Singapour",
                'statuts'=>false
              ],
              [
                'code'=> "SK",
                'name'=> "Slovaquie",
                'statuts'=>false
              ],
              [
                'code'=> "SI",
                'name'=> "Slovénie",
                'statuts'=>false
              ],
              [
                'code'=> "SO",
                'name'=> "Somalie",
                'statuts'=>false
              ],
              
              [
                'code'=> "SD",
                'name'=> "Soudan",
                'statuts'=>false
              ],
              [
                'code'=> "LK",
                'name'=> "Sri Lanka",
                'statuts'=>false
              ],
              [
                'code'=> "SE",
                'name'=> "Suède",
                'statuts'=>false
              ],
              
              [
                'code'=> "CH",
                'name'=> "Suisse",
                'statuts'=>false
              ],
              [
                'code'=> "SR",
                'name'=> "Suriname",
                'statuts'=>false
              ],
              
              [
                'code'=> "SJ",
                'name'=> "Svalbard et Île Jan Mayen",
                'statuts'=>false
              ],
              [
                'code'=> "SZ",
                'name'=> "Swaziland",
                'statuts'=>false
              ],
              [
                'code'=> "SY",
                'name'=> "Syrie",
                'statuts'=>false
              ],
              
              [
                'code'=> "TJ",
                'name'=> "Tadjikistan",
                'statuts'=>false
              ],
              [
                'code'=> "TW",
                'name'=> "Taïwan",
                'statuts'=>false
              ],
              
              [
                'code'=> "TZ",
                'name'=> "Tanzanie",
                'statuts'=>false
              ],
              [
                'code'=> "TD",
                'name'=> "Tchad",
                'statuts'=>false
              ],
              [
                'code'=> "TF",
                'name'=> "Terres australes françaises",
                'statuts'=>false
              ],
              [
                'code'=> "IO",
                'name'=> "Territoire britannique de l'océan Indien",
                'statuts'=>false
              ],
              [
                'code'=> "PS",
                'name'=> "Territoire palestinien",
                'statuts'=>false
              ],
              [
                'code'=> "TH",
                'name'=> "Thaïlande",
                'statuts'=>false
              ],
              [
                'code'=> "TL",
                'name'=> "Timor oriental",
                'statuts'=>false
              ],
              [
                'code'=> "TG",
                'name'=> "Togo",
                'statuts'=>false
              ],
              [
                'code'=> "TK",
                'name'=> "Tokelau",
                'statuts'=>false
              ],
              [
                'code'=> "TO",
                'name'=> "Tonga",
                'statuts'=>false
              ],
              [
                'code'=> "TT",
                'name'=> "Trinité-et-Tobago",
                'statuts'=>false
              ],
              [
                'code'=> "TA",
                'name'=> "Tristan da Cunha",
                'statuts'=>false
              ],
              [
                'code'=> "TN",
                'name'=> "Tunisie",
                'statuts'=>false
              ],
              [
                'code'=> "TM",
                'name'=> "Turkménistan",
                'statuts'=>false
              ],
              [
                'code'=> "TR",
                'name'=> "Turquie",
                'statuts'=>false
              ],
              [
                'code'=> "TV",
                'name'=> "Tuvalu",
                'statuts'=>false
              ],
              [
                'code'=> "UA",
                'name'=> "Ukraine",
                'statuts'=>false
              ],
              [
                'code'=> "EU",
                'name'=> "Union européenne",
                'statuts'=>false
              ],
              [
                'code'=> "UY",
                'name'=> "Uruguay",
                'statuts'=>false
              ],
              [
                'code'=> "VU",
                'name'=> "Vanuatu",
                'statuts'=>false
              ],
              [
                'code'=> "VE",
                'name'=> "Venezuela",
                'statuts'=>false
              ],
              
              [
                'code'=> "VN" ,
                'name'=> "Viêt Nam",
                'statuts'=>false
              ],
              
              [
                'code'=> "WF",
                'name'=> "Wallis-et-Futuna",
                'statuts'=>false
              ],
              
              [
                'code'=> "YE" ,
                'name'=> "Yémen",
                'statuts'=>false
              ],
              [
                'code'=> "ZM",
                'name'=> "Zambie",
                'statuts'=>false
              ],
              
              [
                'code'=> 'ZW',
                'name'=>"Zimbabwe",
                'statuts'=>false
              ]
            

            

            
            
            
           

        ]);
    }
}
