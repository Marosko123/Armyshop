<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // LICENSES
        // Adobe standard license for individuals - https://stock.adobe.com/
        // Freepik standard license for individuals - https://www.freepik.com/

        // Weapons - pistols

        Product::create([
            "name" => "Glock-18",
            "price" => 299.99,
            "description" => "Glock is a brand of polymer-framed, short recoil-operated, locked-breech semi-automatic pistols designed and produced by Austrian manufacturer Glock Ges.m.b.H. Glock Ges.m.b.H. The firearm entered Austrian military and police service by 1982 after becoming the top performer in reliability and safety tests.",
            "image_url" => "https://img.freepik.com/premium-photo/gun-table-with-word-gun-it_771335-54080.jpg?w=1800",
            "alt_text" => "Black glock on table with bullets around",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "P2000",
            "price" => 299.99,
            "description" => "The P2000 is a short recoil-operated locked breech pistol with a modified Browning-type linkless cam action with a vertically tilting barrel also employed in the USP series of self-loading pistols, as well as most modern linkless semi autos.",
            "image_url" => "https://img.freepik.com/free-photo/gun_74658-46.jpg?w=740&t=st=1681023873~exp=1681024473~hmac=d70f8dce10e10d98d0e15449a9e43a5f531a1f3e286d601df993fa597fa5a5d8",
            "alt_text" => "P2000 on white background",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "P250",
            "price" => 399.99,
            "description" => "The SIG Sauer P250 is a semi-automatic pistol made by J.P. Sauer & Sohn, and SIG Sauer of Exeter, New Hampshire. The SIG Sauer P250 can be chambered in .357 SIG, .40 S&W, .45 ACP, and 9x19mm Parabellum. Like other SIG-Sauer pistols, the P250 pistol is a short recoil operated, locked breech pistol. It uses the typical SIG-Sauer cam-operated barrel, which locks into the ejection port on the slide.",
            "image_url" => "https://img.freepik.com/premium-photo/gun-wooden-table-with-word-gun-it_771335-54053.jpg?w=1800",
            "alt_text" => "P250 on the table",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Five-Seven",
            "price" => 499.99,
            "description" => "The Five-seven is a semi-automatic delayed blowback pistol chambered for FN's 5.7×28mm ammunition. The pistol has a concealed hammer. Polymer materials are used extensively in the pistol's design, and even the steel slide is encased in a polymer shell. This provides reduced weight and greater resistance to corrosion.",
            "image_url" => "https://img.freepik.com/free-vector/black-pistol-white_1308-36380.jpg?w=1800&t=st=1681023988~exp=1681024588~hmac=fd24948369a985299536b10cd218f40f3eb8b1c0723b26c7f5aad2ea7f714b2a",
            "alt_text" => "Five-Seven on white background",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Desert Eagle",
            "price" => 699.99,
            "description" => "The Desert Eagle is a gas-operated, semi-automatic pistol known for chambering the .50 Action Express, the largest centerfire cartridge of any magazine-fed, self-loading pistol. Detachable stick magazine; capacities: 9 rounds (.357) 8 rounds (.41 and .44)",
            "image_url" => "https://img.freepik.com/premium-photo/gun-wooden-table-with-word-gun-it_771335-54082.jpg?w=1800",
            "alt_text" => "Desert Eagle",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "R8 Revolver",
            "price" => 599.99,
            "description" => "It is currently the heaviest handgun available, even heavier than many primary weapons. The revolver deals extremely high damage, able to instantly kill with a headshot to a very long range and regardless of armor due to its low damage dropoff and high armor penetration.",
            "image_url" => "https://img.freepik.com/premium-photo/airsoft-gun-white_69593-4705.jpg?w=740",
            "alt_text" => "R8 Revolver on white background",
            "subcategory_id" => 1,
            "license_needed" => true
        ]);



        // Weapons - rifles
        Product::create([
            "name" => "AR15",
            "price" => 2999.99,
            "description" => "The Colt AR-15 is a lightweight, magazine-fed, gas-operated semi-automatic rifle. It is a semi-automatic version of the M16 rifle sold for the civilian and law enforcement markets in the United States. The AR in AR-15 stands for ArmaLite rifle, after the company that developed it in the 1950s.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/02/50/29/85/1000_F_250298556_4iYRL8VQKTM1B1jP7iJgarbnH6hoXU8S.jpg",
            "alt_text" => "AR15 on white background",
            "subcategory_id" => 2,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "M4A1 Carabine",
            "price" => 3499.99,
            "description" => "The M4/M4A1 5.56mm Carbine is a lightweight, gas operated, air cooled, magazine fed, selective rate, shoulder fired weapon with a collapsible stock. It is now the standard issue firearm for most units in the U.S. military.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/97/51/64/1000_F_97516492_Pw1FrDtDyXTtgqovjR68t1HJk0TUqTN6.jpg",
            "alt_text" => "M4A1 Carabine on white background",
            "subcategory_id" => 2,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Barett M82 M107",
            "price" => 2699.99,
            "description" => "The Barrett M82 (standardized by the U.S. military as the M107) is a recoil-operated, semi-automatic anti-materiel rifle developed by the American company Barrett Firearms Manufacturing.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/05/56/29/97/1000_F_556299720_rP92eLddzyPLJr2hLTcObIZErrATaUhr.webp",
            "alt_text" => "Barett M82 M107 on white background",
            "subcategory_id" => 2,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Modern Sniper Rifle",
            "price" => 4999.99,
            "description" => "The modern sniper rifle is a portable shoulder-fired weapon system with a choice between bolt-action or semi-automatic action, fitted with a telescopic sight for extreme accuracy and chambered for a high-ballistic performance centerfire cartridge.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/83/81/78/1000_F_283817893_JX3ROThEOxr4crtsXgkuHrZ2lvyqYnSi.jpg",
            "alt_text" => "Modern Sniper Rifle",
            "subcategory_id" => 2,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Mid Range Rifle",
            "price" => 2799.99,
            "description" => "Mid-Range Rifle extends the range from 100-700 yards in the field. This course will extend your ability to get first-round hits out to 700 yards, with primary focus inside of Danger Close distances [0-300 yards].",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/85/40/64/1000_F_85406466_VGzGPa2VVapl8QoklbsQk31lfxuzyIeJ.jpg",
            "alt_text" => "Mid Range Rifle",
            "subcategory_id" => 2,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "AK47",
            "price" => 2799.99,
            "description" => "AK-47, also called Kalashnikov Model 1947, Soviet assault rifle, possibly the most widely used shoulder weapon in the world. The initials AK represent Avtomat Kalashnikova, Russian for “automatic Kalashnikov,” for its designer, Mikhail Timofeyevich Kalashnikov, who designed the accepted version of the weapon in 1947.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/04/30/88/22/1000_F_430882245_C1cDAdEOuXbAIaqia6M5l9C19XNuHXGJ.jpg",
            "alt_text" => "AK47 on wooden table surrounded with ammo",
            "subcategory_id" => 2,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Steyr AUG",
            "price" => 3499.99,
            "description" => "The Steyr AUG is a selective-fire, bullpup weapon with a conventional gas-piston-operated action that fires from a closed bolt. It is designed as a Modular Weapon System that could be quickly configured as a rifle, a carbine, a sniper rifle, a sub-machine gun and even an open-bolt squad automatic weapon.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/00/88/52/07/1000_F_88520768_FNk2WaqoBFtVITVotOtIxqQbGSpNLnLQ.jpg",
            "alt_text" => "Steyr AUG on white background",
            "subcategory_id" => 2,
            "license_needed" => true
        ]);



        // Weapons - submachine guns
        Product::create([
            "name" => "MP9",
            "price" => 1299.99,
            "description" => "The MP9 represents the latest advancement in personal defense weapons. The MP9 is the world's lightest 9 x 19 mm select-fire weapon, ideal for surveillance teams, vehicle crews, CQB, SWAT teams and as a PDW, surpassing all other submachine guns in size, weight, and flexibility.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/02/70/92/59/1000_F_270925985_janlnoljfpL4qUW2fRQdaoXFIVRP68eg.jpg",
            "alt_text" => "MP9 on white background",
            "subcategory_id" => 3,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Thompson",
            "price" => 1899.99,
            "description" => "The Thompson submachine gun (also known as the 'Tommy Gun', 'Chicago Typewriter', 'Chicago Piano', 'Trench Sweeper', or 'Trench Broom') is a blowback-operated, selective-fire submachine gun, invented by United States Army brigadier general John T. Thompson in 1918.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/05/18/82/26/1000_F_518822672_5M7dAdzRGII1cZjhFtjHHGlssCAcZqht.jpg",
            "alt_text" => "Thompson on white background",
            "subcategory_id" => 3,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Uzi",
            "price" => 1599.99,
            "description" => "Uzi submachine gun, compact automatic weapon that is used throughout the world as a police and special-forces firearm. The Uzi is named for its designer, Uziel Gal, an Israeli army officer who developed it after the Arab-Israeli war of 1948.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/04/26/67/30/1000_F_426673071_Nuoh9k0rTW1vMOgf7Rflr6VlfQhyfdJt.jpg",
            "alt_text" => "Uzi on white background",
            "subcategory_id" => 3,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "P90",
            "price" => 2499.99,
            "description" => "The P90 is a selective fire, straight blowback-operated weapon with a cyclic rate of fire of around 850-1,100 rounds per minute. The weapon is chambered for FN's 5.7x28mm ammunition. Its unusual shape is based on extensive ergonomic research.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/34/69/06/1000_F_334690693_JJeb69qcb2yKB0F38s02NpIMCxafdY5n.jpg",
            "alt_text" => "P90 on camouflage table",
            "subcategory_id" => 3,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Mid Range Rifle",
            "price" => 2799.99,
            "description" => "Mid-Range Rifle extends the range from 100-700 yards in the field. This course will extend your ability to get first-round hits out to 700 yards, with primary focus inside of Danger Close distances [0-300 yards].",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/85/40/64/1000_F_85406466_VGzGPa2VVapl8QoklbsQk31lfxuzyIeJ.jpg",
            "alt_text" => "Mid Range Rifle",
            "subcategory_id" => 3,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "UMP45",
            "price" => 1699.99,
            "description" => "The UMP45 is a submachine gun type weapon in BATTLEGROUNDS. The UMP, short for Universal Machine pistol, is a submachine gun designed by Heckler & Koch. The UMP is the successor to the MP5, though both are in service to this day.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/04/75/90/57/1000_F_475905740_cPzkNF5NjfnQ7tW59Mv3ML8OvmI0KNqg.jpg",
            "alt_text" => "UMP45 on white background",
            "subcategory_id" => 3,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "MP7",
            "price" => 1499.99,
            "description" => "The MP7 is a German personal defense weapon (PDW) developed by Heckler & Koch (H&K), and is intended to replace H&K's MP5 submachine gun. Intended to compete with the P90, the MP7 fires the 4.6x30mm cartridge, a competitor to the P90's 5.7x28mm cartridge, which has good armor piercing capabilities in real life.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/02/76/12/21/1000_F_276122169_NaSsomU3VQkRIdVEm0DOSKBu7Xp3CVRQ.jpg",
            "alt_text" => "Green MP7 on white background",
            "subcategory_id" => 3,
            "license_needed" => true
        ]);



        // Weapons - heavy
        Product::create([
            "name" => "XM1014",
            "price" => 2599.99,
            "description" => "XM1014 is a semi-automatic shotgun, which is lighter, has a fast drawing time, and is able to reload faster than most shotguns. However, it's also weaker than the SPAS-12 and the Dual Desperado, firing fewer pellets per shot.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/48/81/76/1000_F_48817606_FNW95v73cD4b3d8WHCCUekC4pEAVmQ6r.jpg",
            "alt_text" => "XM1014 on white background",
            "subcategory_id" => 4,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Modern semi-automatic shotgun",
            "price" => 2399.99,
            "description" => "A semi-automatic shotgun is a form of shotgun that is able to fire a cartridge after every trigger squeeze, without needing to manually chamber another round.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/81/49/02/1000_F_281490294_QfR3UUEr7akQMO1lmGqBVEODQSxXEIwV.jpg",
            "alt_text" => "Modern semi-automatic shotgun on white background",
            "subcategory_id" => 4,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "12 Gauge",
            "price" => 2199.99,
            "description" => "What Is a 12-Gauge? A 12 gauge shotgun has a nominal bore diameter of 0.729 inches or 18.5mm in the rest of the world. A 12-gauge/bore means that a dozen lead balls of 12-gauge diameter weighed together equal a pound",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/01/43/37/78/1000_F_143377849_ltIrIImtCs8p6p1TYjtAfb0AUptnpNRQ.jpg",
            "alt_text" => "Uzi on white background",
            "subcategory_id" => 4,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Minigun",
            "price" => 4199.99,
            "description" => "a U.S. aircraft machine gun consisting of a rotating cluster of six barrels using 7.62 mm ammunition and capable of variable rates of fire of up to 6,000 rounds per minute.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/85/74/64/1000_F_285746453_OI2QJGbgJTMHEbVoau3vq0OLN0OkGCiV.jpg",
            "alt_text" => "Minigun on white background",
            "subcategory_id" => 4,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Large Machine Gun",
            "price" => 5599.99,
            "description" => "These weapons are designed to provide increased range, penetration and destructive power against vehicles, buildings, aircraft and light fortifications beyond the standard rifle calibers used in medium or general-purpose machine gun, or the intermediate cartridges used in light machine guns.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/00/05/34/47/1000_F_5344795_d00o6Y4ODs0V9w2PoaLJLSUdy0QeKO9o.jpg",
            "alt_text" => "Large machine gun mounted on a vehicle",
            "subcategory_id" => 4,
            "license_needed" => true
        ]);



        // Weapons - knives
        Product::create([
            "name" => "Chef's knife",
            "price" => 49.99,
            "description" => "Very sharp knive, used by chefs to cut vegetables and meat.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/91/25/54/1000_F_91255480_4lDbHi5W7B8qVQSowAXBxjMR5YzqJUlE.jpg",
            "alt_text" => "Chef's knife on white background",
            "subcategory_id" => 5,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Cardboard cutter",
            "price" => 6.99,
            "description" => "Dangerous knive, used by criminals to cut cardboard boxes.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/00/25/05/19/1000_F_25051982_jqVScaJsCEKCf72oETJMfSrQm7GixaCX.jpg",
            "alt_text" => "Cardboard cutter on white background",
            "subcategory_id" => 5,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Large survival knife",
            "price" => 32.99,
            "description" => "Survival knives are designed for work such as setting traps, cutting branches, carving wood, and skinning animals. Most survival knives have fixed blades that are 10 cm to 20 cm (3.9 - 7.9 inches) long with a full thick tang.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/05/65/58/54/1000_F_565585420_VHOZkFxqg60nzybwATFkrBeWD1IRCFgF.webp",
            "alt_text" => "Large survival knife on white background",
            "subcategory_id" => 5,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Butterfly knife",
            "price" => 69.99,
            "description" => "A butterfly knife, also known as a balisong, fan knife or Batangas knife, is a type of folding pocketknife that originated in the Philippines. Its distinct features are two handles counter-rotating around the tang such that, when closed, the blade is concealed within grooves in the handles.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/03/66/91/57/1000_F_366915774_PjaYTr5RIPv8uvRV1UDOfIc6ccoe2XKH.jpg",
            "alt_text" => "Butterfly knife on the table",
            "subcategory_id" => 5,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Butcher's knife",
            "price" => 45.99,
            "description" => "This is a large knife with a wide, curved tip for butchering and cutting large cuts of meat. It can also be used to skin large animals.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/14/13/48/1000_F_214134889_cmVCQPBNhW8vdH6kezuDdGXyg5RQAZjc.jpg",
            "alt_text" => "Butcher's knife on white background",
            "subcategory_id" => 5,
            "license_needed" => true
        ]);



        // Transport - cars
        Product::create([
            "name" => "Military JEEP",
            "price" => 44999.99,
            "description" => "The Willys MB and the Ford GPW, formally the U.S. Army Truck, 0.25-ton, 4x4, Command Reconnaissance, informally the Willys Jeep, Jeep, or jeep, and sometimes referred to by its supply catalogue designation G503, are American off-road four-wheel drive military light utility vehicles, built in large numbers.",
            "image_url" => "https://t3.ftcdn.net/jpg/01/75/48/34/240_F_175483406_qRtBngtDm0HdtjI9QQbqRRxlGOswKPZ0.jpg",
            "alt_text" => "Military JEEP in the terrain",
            "subcategory_id" => 6,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Armored JEEP",
            "price" => 64999.99,
            "description" => "The Armored Jeep is an upgraded version of the Jeep. It has the same low speed and average maneuverability as the Jeep, but higher health due to the armor. It can carry one passenger, or gunner who can fire a slow M249 mounted on the front passenger seat.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/00/08/10/77/1000_F_8107792_YR6Q19CLtnWUVOhiOLf7gpch0JGaUNlt.jpg",
            "alt_text" => "Armored JEEP in the terrain",
            "subcategory_id" => 6,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Armoured boxer",
            "price" => 99999.99,
            "description" => "Boxer is set to become the new British Mechanised Infantry Vehicle (MIV), an eight-by-eight-wheeled, all-terrain, armoured transport vehicle. Its unique module design consists of a drive module and a mission module.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/03/60/86/17/1000_F_360861714_ubsKPDcNpZaW17ziuP4r2Zg7XTEQfzSP.jpg",
            "alt_text" => "A Boxer driving in the sand",
            "subcategory_id" => 6,
            "license_needed" => true
        ]);



        // Transport - motorcycle
        Product::create([
            "name" => "Three-wheeled motorcycle",
            "price" => 16999.99,
            "description" => "The Zündapp KS 750 is a World War II-era motorcycle and sidecar combination developed for the German Wehrmacht (armed forces) before and during the Second World War, by the German company Zündapp G.m.b.H. After entering service in 1941, over 18,000 were built through 1944, and deployed on all major German battlefronts.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/16/21/28/1000_F_16212854_MxB70SeDt7lmt8Ssnh1TrUomiwQ8JKmV.jpg",
            "alt_text" => "Three-wheeled motorcycle on grass",
            "subcategory_id" => 7,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Kawasaki KLR650 Diesel",
            "price" => 64999.99,
            "description" => "Converting the Kawasaki KLR650 gasoline engine to run on JP-8/diesel was no mean feat, large parts of the engine had to be completely replaced and many other modifications for military use were needed. The resulting bike now runs on the same JP-8 fuel as the B-2 Stealth Bomber and the Hummvee.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/73/89/26/1000_F_373892683_g06XvV05jZGxxhK0TlS0uGGT5ArgGNVm.jpg",
            "alt_text" => "Kawasaki KLR650 Diesel on concrete",
            "subcategory_id" => 7,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Triumph T100 green",
            "price" => 99999.99,
            "description" => "Enjoyed by experienced and new riders alike, the lively but easy-going 900 cc motor provides riding excitement accompanied by the trademark Bonneville British twin soundtrack. Modern, confidence-inspiring handling with a comfortable riding position and low 31.1 in seat height, plus the versatility to take you beyond your destination, the T100 makes every ride a pleasure, whether it's injecting fun into the work commute or escaping the everyday on the weekend.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/05/01/84/30/1000_F_501843033_NhuskoKDSZ50FrbBYb1IjwATrH6z1Zqi.jpg",
            "alt_text" => "Triumph T100 green in the store",
            "subcategory_id" => 7,
            "license_needed" => true
        ]);



        // Transport - panzers
        Product::create([
            "name" => "Kampfpanzer Leopard 2 A 6",
            "price" => 253999.99,
            "description" => "The Leopard 2A6 is one of the latest generations of the main battle tanks from the family of German Leopard. The Leopard 2A6 was developed and manufactured by the German Defence Company Krauss-Maffei Wegmann based on the Leopard 2A5 main battle tank. The Leopard 2A6 entered into service with the German army in 2001. The first version of the Leopard 2 tank was produced for the first time in 1979 and is in service in Austria, Canada, Chile, Denmark, Finland, Germany, Greece, Norway, Poland, Portugal, Singapore, Switzerland, Sweden, Spain and Turkey.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/87/42/10/1000_F_87421002_7hZ6Nb0y95wiNr7iZyJp0qukO5V05oY3.jpg",
            "alt_text" => "Kampfpanzer Leopard 2 A 6 on battlefront",
            "subcategory_id" => 8,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Leopard 1",
            "price" => 228999.99,
            "description" => "The Kampfpanzer Leopard 1 (also styled Leopard I, before the Leopard 2 simply known as the Kampfpanzer Leopard) is a main battle tank designed by Porsche and manufactured by Krauss-Maffei in West Germany, first entering service in 1965. Developed in an era when HEAT warheads were thought to make conventional heavy armour of limited value, the Leopard design focused on effective firepower and mobility instead of heavy protection. It featured moderate armour, only effective against low caliber autocannons and heavy machine guns, giving it a high power-to-weight ratio.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/05/67/76/79/1000_F_567767903_6IeuCiuHoyDQmVZjHbEMPFx5tAQF1ZHu.jpg",
            "alt_text" => "Leopard 1 on battlefield",
            "subcategory_id" => 8,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "American M1 Abrams",
            "price" => 249999.99,
            "description" => "Approved for production in 1990, the M1A2 represents the U.S. Army's technological improvement of the basic M1A1 design and the most modern battle tank in the world. Outwardly similar in appearance to the M1A1, the most notable exterior changes on the M1A2 are the redesigned Commander's Weapon Station (CWS) and the addition of a Commander's Independent Thermal Viewer) on the left side of the turret forward of the loader's hatch. Internally, however, the M1A2 has been radically redesigned to take advantage of newer technology.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/00/81/29/97/1000_F_81299735_ghs8P6EH9Q85RAIuSjeAlL1bk6A01vFY.jpg",
            "alt_text" => "American M1 Abrams grass",
            "subcategory_id" => 8,
            "license_needed" => true
        ]);



        // Transport - planes
        Product::create([
            "name" => "C-130",
            "price" => 1201999.99,
            "description" => "The C-130 Hercules primarily performs the tactical portion of the airlift mission. The aircraft is capable of operating from rough, dirt strips and is the prime transport for airdropping troops and equipment into hostile areas.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/03/23/62/1000_F_3236250_IWXYqNfpUmwbGZr12Yr1Bq89Jy01Bq.jpg",
            "alt_text" => "C-130 in the air",
            "subcategory_id" => 9,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "F-15 Eagle",
            "price" => 4228999.99,
            "description" => "The F-15 Eagle is an all-weather, extremely maneuverable, tactical fighter designed to permit the Air Force to gain and maintain air supremacy over the battlefield. The Eagle's air superiority is achieved through a mixture of unprecedented maneuverability and acceleration, range, weapons and avionics.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/39/87/90/1000_F_39879054_TZMn7wf3no2FuaAHamhvBh5ZuAIcZMPs.jpg",
            "alt_text" => "F-15 Eagle in the air",
            "subcategory_id" => 9,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "F-35C Lightning II",
            "price" => 5359999.99,
            "description" => "The Lockheed Martin F-35 Lightning II is an American family of single-seat, single-engine, all-weather stealth multirole combat aircraft that is intended to perform both air superiority and strike missions. It is also able to provide electronic warfare and intelligence, surveillance, and reconnaissance capabilities.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/04/80/78/70/1000_F_480787088_W3FqRMa5Hrplh5xbOeFXvGaDShommaVY.jpg",
            "alt_text" => "F-35C Lightning II in the clouds",
            "subcategory_id" => 9,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Eurocopter Tiger",
            "price" => 1686999.99,
            "description" => "The Eurocopter Tiger is a four-blade, twin-engine attack helicopter which first entered service in 2003. It is manufactured by Airbus Helicopters (formerly Eurocopter), which arose from the merger of Aérospatiale's and DASA's respective helicopter divisions. Airbus Helicopters designates it as the EC665. In France and Spain, the Tiger is known as the Tigre (which is French and Spanish for Tiger), while in Germany it is referred to as the Tiger.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/03/58/29/57/1000_F_358295770_C5bKn8vjSzhuYrjn9IPyrIIU54yW8wgB.jpg",
            "alt_text" => "Eurocopter Tiger in the air",
            "subcategory_id" => 9,
            "license_needed" => true
        ]);



        // Transport - boats
        Product::create([
            "name" => "Nuclear ship",
            "price" => 865501999.99,
            "description" => "Nuclear submarines and aircraft carriers are powered by onboard nuclear reactors. Atoms in the nuclear reactor split, which releases energy as heat. This heat is used to create high-pressured steam. The steam turns propulsion turbines that provide the power to turn the propeller.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/02/51/36/13/1000_F_251361393_IHG3duzbBWkrGiikcz0fltLdW3ONHY1Q.jpg",
            "alt_text" => "Nuclear ship in the water",
            "subcategory_id" => 10,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "RIB boat",
            "price" => 28999.99,
            "description" => "The Rigid Hull Inflatable Boat is a high-speed, high-buoyancy, extreme-weather craft with the primary mission of SEAL insertion/extraction and a secondary mission of marine interdiction operations. The RHIB is also used by U.S. Navy sailors for visit board and search operations at sea.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/03/28/45/55/1000_F_328455530_RhX15Vq1Uzjmcrax87b6YLlzD345Vt3m.jpg",
            "alt_text" => "RIB boat during exercise",
            "subcategory_id" => 10,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Frigate F-101 Alvaro de Bazan",
            "price" => 249999.99,
            "description" => "The Álvaro de Bazán class, also known as the F100 class, is a class of Aegis combat system-equipped air defence frigates in service with the Spanish Navy. The vessels were built by Spanish shipbuilder Navantia in Ferrol, with the lead ship of the class named for Admiral Álvaro de Bazán.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/00/47/44/98/1000_F_47449806_nZwKHBdqy9U9xMetGqTKYvUOW2LJ1CIe.jpg",
            "alt_text" => "Frigate F-101 Alvaro de Bazan in the water",
            "subcategory_id" => 10,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Submarine",
            "price" => 249999.99,
            "description" => "Submarine, any naval vessel that is capable of propelling itself beneath the water as well as on the water's surface. This is a unique capability among warships, and submarines are quite different in design and appearance from surface ships.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/00/37/05/35/1000_F_37053547_bxhJ6HtSpN4YGYRQdbQqJiV1VNESDg0f.jpg",
            "alt_text" => "Submarine underwater",
            "subcategory_id" => 10,
            "license_needed" => true
        ]);

        // Clothing - jackets
        Product::create([
            "name" => "Men's Winter Jacket",
            "price" => 129.99,
            "description" => "This men's winter jacket is made of high-quality waterproof and windproof material. It features a detachable hood, multiple pockets, and a warm and comfortable inner lining. Perfect for cold and snowy weather.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/45/56/72/1000_F_345567287_r3qJeO1ZXyBgIt8oLFLw2J4xGvDdZ7lf.jpg",
            "alt_text" => "Men's Winter Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Leather Jacket",
            "price" => 299.99,
            "description" => "This women's leather jacket is made of high-quality leather and features a classic design with a modern twist. It has a warm and comfortable inner lining and multiple pockets for storing your essentials. Perfect for a stylish and sophisticated look.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/30/71/53/1000_F_230715399_PzA4oYNi4h4yETuydD7G8ZxbUbMkX9Ya.jpg",
            "alt_text" => "Women's Leather Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Denim Jacket",
            "price" => 79.99,
            "description" => "This men's denim jacket is a classic wardrobe staple. It's made of durable and high-quality denim material and features multiple pockets and a comfortable inner lining. Perfect for a casual and stylish look.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/02/67/85/61/1000_F_267856159_jEHpLzvJxLZpDyItAVwifz3LLq3dxNBi.jpg",
            "alt_text" => "Men's Denim Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Women's Puffer Jacket",
            "price" => 149.99,
            "description" => "This women's puffer jacket is made of high-quality and lightweight material that's perfect for staying warm and cozy. It features a detachable hood, multiple pockets, and a comfortable inner lining. Perfect for cold and snowy weather.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/18/41/97/1000_F_318419750_RtzEDojlWsElHvNpQLVmG8nn6XrO6c08.jpg",
            "alt_text" => "Women's Puffer Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Men's Parka",
            "price" => 249.99,
            "description" => "This men's parka is made of high-quality and waterproof material that's perfect for cold and rainy weather. It features a detachable hood, multiple pockets, and a warm and comfortable inner lining. Perfect for outdoor activities.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/40/55/54/1000_F_240555431_KQ2wS1U6Jtt2O57OY6crkU6Phy0pEdlf.jpg",
            "alt_text" => "Men's Parka",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Women's Bomber Jacket",
            "price" => 99.99,
            "description" => "This women's bomber jacket is a stylish and comfortable choice for any occasion. It features a classic design with a modern twist, multiple pockets, and a comfortable inner lining. Perfect for a casual and trendy look.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/41/69/32/1000_F_241693272_q5ZX7VqMvwwntZcmV8I5R69hJGwHz67F.jpg",
            "alt_text" => "Women's Bomber Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);        

        // Clothing - pants
        Product::create([
            "name" => "Men's Cargo Pants",
            "price" => 69.99,
            "description" => "These men's cargo pants are made of high-quality and durable material. They feature multiple pockets for storing your essentials and have an adjustable waistband for a comfortable fit. Perfect for outdoor activities and casual wear.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/23/73/70/1000_F_323737057_RdZgSlALZQIObEkwVKM7W8plmCp3yJq3.jpg",
            "alt_text" => "Men's Cargo Pants",
            "subcategory_id" => 12,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Skinny Jeans",
            "price" => 89.99,
            "description" => "These women's skinny jeans are made of high-quality stretch denim material. They have a comfortable and flattering fit and feature a classic design with a modern twist. Perfect for everyday wear and special occasions.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/14/01/71/1000_F_314017174_HxHawLTj0ZgIc1Im8w2fejTZy0AuyyX9.jpg",
            "alt_text" => "Women's Skinny Jeans",
            "subcategory_id" => 12,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's High-Waisted Pants",
            "price" => 79.99,
            "description" => "These women's high-waisted pants are made of high-quality and stretchy material. They have a flattering and comfortable fit and feature a classic and versatile design. Perfect for dressing up or down.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/30/01/98/1000_F_330019808_Q0QxMjzCYwGT7MlnxBJf5m7dDgWIB5LI.jpg",
            "alt_text" => "Women's High-Waisted Pants",
            "subcategory_id" => 12,
            "license_needed" => false
        ]);
    
        Product::create([
            "name" => "Men's Dress Pants",
            "price" => 99.99,
            "description" => "These men's dress pants are made of high-quality and durable material. They have a classic and versatile design and feature a comfortable fit with a modern and stylish look. Perfect for formal occasions and business wear.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/04/06/11/1000_F_304061148_LQfmh6F5U2grY47F1RQ9zAGJGyNUlmkP.jpg",
            "alt_text" => "Men's Dress Pants",
            "subcategory_id" => 12,
            "license_needed" => false
        ]);
    
        Product::create([
            "name" => "Women's Wide-Leg Pants",
            "price" => 69.99,
            "description" => "These women's wide-leg pants are made of high-quality and lightweight material. They have a comfortable and flattering fit and feature a trendy and stylish design. Perfect for summer and spring wear.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/12/20/47/1000_F_312204702_QZoxGnI4HGBYUGhiKjQNN4W54dbHaxI1.jpg",
            "alt_text" => "Women's Wide-Leg Pants",
            "subcategory_id" => 12,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Jogger Pants",
            "price" => 49.99,
            "description" => "These men's jogger pants are made of soft and comfortable material. They feature a tapered design with an elastic waistband and cuffs for a modern and stylish look. Perfect for casual wear and light exercise.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/03/97/29/1000_F_303972942_t8CgKjWTY1y3qIC3Tq1xK2wvpSrmZS4F.jpg",
            "alt_text" => "Men's Jogger Pants",
            "subcategory_id" => 12,
            "license_needed" => false
            ]);
    
        // Clothing - shirts
        Product::create([
            "name" => "Men's Oxford Shirt",
            "price" => 49.99,
            "description" => "This men's Oxford shirt is made of high-quality cotton material and features a classic design with a modern twist. It has a comfortable and flattering fit and is perfect for both casual and formal occasions.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/54/31/42/1000_F_354314208_M9XtrnojJh7n81nSdeuV7Riz5ZtGrgL1.jpg",
            "alt_text" => "Men's Oxford Shirt",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Tunic Shirt",
            "price" => 59.99,
            "description" => "This women's tunic shirt is made of high-quality and soft cotton material. It features a loose and comfortable fit and a stylish and unique design. Perfect for casual and trendy looks.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/06/44/54/1000_F_306445454_IKAbWnoyngYRyFJzLdS6TjT6jvU6LRX9.jpg",
            "alt_text" => "Women's Tunic Shirt",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Polo Shirt",
            "price" => 39.99,
            "description" => "This men's polo shirt is made of high-quality and breathable material. It features a classic design with a comfortable fit and is perfect for both casual and semi-formal occasions.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/61/34/22/1000_F_261342235_JNQ12S1sc3qgmNtEzmlLWSjZ4kwf9jiJ.jpg",
            "alt_text" => "Men's Polo Shirt",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Button-Up Shirt",
            "price" => 69.99,
            "description" => "This women's button-up shirt is made of high-quality and soft cotton material. It features a unique and trendy design with a flattering and comfortable fit. Perfect for both casual and semi-formal occasions.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/75/05/62/1000_F_275056291_i8hhdigCqBr3qmvK4XZ30ilfRSLmYi4d.jpg",
            "alt_text" => "Women's Button-Up Shirt",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        // Clothing - shoes
        Product::create([
            "name" => "Men's Running Shoes",
            "price" => 89.99,
            "description" => "These men's running shoes are made of high-quality and breathable material. They have a comfortable fit and provide excellent support for running and other physical activities. Available in various colors.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/72/07/17/1000_F_272071773_M8dRheG9A68TwPY0pwFyJop7VCDfDIzL.jpg",
            "alt_text" => "Men's Running Shoes",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Women's High Heels",
            "price" => 149.99,
            "description" => "These women's high heels are made of high-quality material and feature a classic design with a modern twist. They have a comfortable and supportive fit and are perfect for special occasions and formal events. Available in various colors.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/01/92/19/03/1000_F_192190363_68QO7YcYqbhpvIG7zp1gOtbJcd7VHRSd.jpg",
            "alt_text" => "Women's High Heels",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Men's Dress Shoes",
            "price" => 129.99,
            "description" => "These men's dress shoes are made of high-quality leather and feature a classic and elegant design. They have a comfortable fit and are perfect for formal events and work. Available in various colors.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/17/84/69/1000_F_317846924_y3qKj6W8UvFxy0It0C3OqyU98W8Jc0jK.jpg",
            "alt_text" => "Men's Dress Shoes",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Women's Sandals",
            "price" => 69.99,
            "description" => "These women's sandals are made of high-quality and comfortable material. They have a stylish and trendy design and are perfect for everyday wear and casual occasions. Available in various colors.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/02/54/90/94/1000_F_254909497_WzZpTh7I8NRrmwjOtjKtOwqx0yQr0rMv.jpg",
            "alt_text" => "Women's Sandals",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);
        
        // Clothing - socks
        Product::create([
            "name" => "Men's Athletic Socks",
            "price" => 12.99,
            "description" => "These men's athletic socks are made of high-quality material and are designed for maximum comfort and support. They feature a breathable mesh top and arch compression for a secure fit. Perfect for sports and everyday wear.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/24/44/69/1000_F_324446913_9XyIdJMTfllV7ICuOjvj4Lxy6cCZlwtv.jpg",
            "alt_text" => "Men's Athletic Socks",
            "subcategory_id" => 15,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Women's Ankle Socks",
            "price" => 9.99,
            "description" => "These women's ankle socks are made of high-quality material and are designed for maximum comfort and style. They feature a cushioned sole and reinforced heel and toe for durability. Perfect for everyday wear and exercise.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/58/01/42/1000_F_358014224_7AxtGmncJ9zRZ4W8uV7cxOGzgyHwV7fa.jpg",
            "alt_text" => "Women's Ankle Socks",
            "subcategory_id" => 15,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Men's Dress Socks",
            "price" => 14.99,
            "description" => "These men's dress socks are made of high-quality material and are designed for maximum comfort and style. They feature a reinforced heel and toe and a ribbed cuff for a secure fit. Perfect for formal occasions and business wear.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/02/28/72/09/1000_F_228720914_Mli6Kj3qibXlbWJlHd7ESZCxYJ3q7dS5.jpg",
            "alt_text" => "Men's Dress Socks",
            "subcategory_id" => 15,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Women's Knee High Socks",
            "price" => 16.99,
            "description" => "These women's knee high socks are made of high-quality material and are designed for maximum comfort and style. They feature a reinforced heel and toe and a ribbed cuff for a secure fit. Perfect for casual and dressy occasions.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/03/47/13/12/1000_F_347131216_9lYkJZAmY64byL8WzcwNwv2usjyOjgld.jpg",
            "alt_text" => "Women's Knee High Socks",
            "subcategory_id" => 15,
            "license_needed" => false
        ]);
        
        

    }
}