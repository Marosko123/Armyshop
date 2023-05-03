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
            "description" => "The Five-seven is a semi-automatic delayed blowback pistol chambered for FN's 5.7x28mm ammunition. The pistol has a concealed hammer. Polymer materials are used extensively in the pistol's design, and even the steel slide is encased in a polymer shell. This provides reduced weight and greater resistance to corrosion.",
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
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Armored JEEP",
            "price" => 64999.99,
            "description" => "The Armored Jeep is an upgraded version of the Jeep. It has the same low speed and average maneuverability as the Jeep, but higher health due to the armor. It can carry one passenger, or gunner who can fire a slow M249 mounted on the front passenger seat.",
            "image_url" => "https://as2.ftcdn.net/v2/jpg/00/08/10/77/1000_F_8107792_YR6Q19CLtnWUVOhiOLf7gpch0JGaUNlt.jpg",
            "alt_text" => "Armored JEEP in the terrain",
            "subcategory_id" => 6,
            "license_needed" => false
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
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Kawasaki KLR650 Diesel",
            "price" => 64999.99,
            "description" => "Converting the Kawasaki KLR650 gasoline engine to run on JP-8/diesel was no mean feat, large parts of the engine had to be completely replaced and many other modifications for military use were needed. The resulting bike now runs on the same JP-8 fuel as the B-2 Stealth Bomber and the Hummvee.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/03/73/89/26/1000_F_373892683_g06XvV05jZGxxhK0TlS0uGGT5ArgGNVm.jpg",
            "alt_text" => "Kawasaki KLR650 Diesel on concrete",
            "subcategory_id" => 7,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Triumph T100 green",
            "price" => 99999.99,
            "description" => "Enjoyed by experienced and new riders alike, the lively but easy-going 900 cc motor provides riding excitement accompanied by the trademark Bonneville British twin soundtrack. Modern, confidence-inspiring handling with a comfortable riding position and low 31.1 in seat height, plus the versatility to take you beyond your destination, the T100 makes every ride a pleasure, whether it's injecting fun into the work commute or escaping the everyday on the weekend.",
            "image_url" => "https://as1.ftcdn.net/v2/jpg/05/01/84/30/1000_F_501843033_NhuskoKDSZ50FrbBYb1IjwATrH6z1Zqi.jpg",
            "alt_text" => "Triumph T100 green in the store",
            "subcategory_id" => 7,
            "license_needed" => false
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
            "image_url" => "https://t3.ftcdn.net/jpg/03/06/72/12/240_F_306721279_qxeSz54MyV6ziwp11yM1YOTZVRs7UVLB.jpg",
            "alt_text" => "Men's Winter Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Leather Jacket",
            "price" => 299.99,
            "description" => "This women's leather jacket is made of high-quality leather and features a classic design with a modern twist. It has a warm and comfortable inner lining and multiple pockets for storing your essentials. Perfect for a stylish and sophisticated look.",
            "image_url" => "https://t4.ftcdn.net/jpg/04/56/64/49/240_F_456644907_wR7BtbgylkG8smC83bxbS0rSK3Ib8fsa.jpg",
            "alt_text" => "Women's Leather Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Denim Jacket",
            "price" => 79.99,
            "description" => "This men's denim jacket is a classic wardrobe staple. It's made of durable and high-quality denim material and features multiple pockets and a comfortable inner lining. Perfect for a casual and stylish look.",
            "image_url" => "https://t3.ftcdn.net/jpg/04/85/87/74/240_F_485877472_y6rABhOEC4AzZMLveRmHj8EJsecyLNel.jpg",
            "alt_text" => "Men's Denim Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Puffer Jacket",
            "price" => 149.99,
            "description" => "This women's puffer jacket is made of high-quality and lightweight material that's perfect for staying warm and cozy. It features a detachable hood, multiple pockets, and a comfortable inner lining. Perfect for cold and snowy weather.",
            "image_url" => "https://t3.ftcdn.net/jpg/03/93/07/38/240_F_393073849_O30WkQVdeIB3GX7HPbHdqtez4klBYgwm.jpg",
            "alt_text" => "Women's Puffer Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Parka",
            "price" => 249.99,
            "description" => "This men's parka is made of high-quality and waterproof material that's perfect for cold and rainy weather. It features a detachable hood, multiple pockets, and a warm and comfortable inner lining. Perfect for outdoor activities.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/96/25/60/240_F_96256015_gfIF1cOm0QJsf8BiHGyidvQRewsA3zDZ.jpg",
            "alt_text" => "Men's Parka",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Bomber Jacket",
            "price" => 99.99,
            "description" => "This women's bomber jacket is a stylish and comfortable choice for any occasion. It features a classic design with a modern twist, multiple pockets, and a comfortable inner lining. Perfect for a casual and trendy look.",
            "image_url" => "https://t4.ftcdn.net/jpg/02/46/38/57/240_F_246385756_P9CYfheUfrwb7XtN7NykHYRT1wjUyWIE.jpg",
            "alt_text" => "Women's Bomber Jacket",
            "subcategory_id" => 11,
            "license_needed" => false
        ]);

        // Clothing - shirts
        Product::create([
            "name" => "You can T-Shirt",
            "price" => 49.99,
            "description" => "This men's T-shirt is made of high-quality cotton material and features a classic design with a modern twist. It has a comfortable and flattering fit and is perfect for both casual and formal occasions.",
            "image_url" => "https://t4.ftcdn.net/jpg/03/77/71/41/240_F_377714140_0ZgnZfVnkXoZBctoZh6YNCHHRIZvGbW7.jpg",
            "alt_text" => "Men's Oxford Shirt",
            "subcategory_id" => 12,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Polo Shirt",
            "price" => 39.99,
            "description" => "This men's polo shirt is made of high-quality and breathable material. It features a classic design with a comfortable fit and is perfect for both casual and semi-formal occasions.",
            "image_url" => "https://t4.ftcdn.net/jpg/04/60/49/41/240_F_460494127_4K2wrCwwYdLIEfpBbOEUvDEMzdFuwuWQ.jpg",
            "alt_text" => "Men's Polo Shirt",
            "subcategory_id" => 12,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Button-Up Shirt",
            "price" => 69.99,
            "description" => "This button-up shirt is made of high-quality and soft cotton material. It features a unique and trendy design with a flattering and comfortable fit. Perfect for both casual and semi-formal occasions.",
            "image_url" => "https://t4.ftcdn.net/jpg/03/93/58/35/240_F_393583588_EAFxrSIJ7OjnDHqQARrjsQjeGsuwN5ZR.jpg",
            "alt_text" => "Button-Up Shirt",
            "subcategory_id" => 12,
            "license_needed" => false
        ]);

        // Clothing - pants
        Product::create([
            "name" => "Men's Cargo Pants",
            "price" => 69.99,
            "description" => "These men's cargo pants are made of high-quality and durable material. They feature multiple pockets for storing your essentials and have an adjustable waistband for a comfortable fit. Perfect for outdoor activities and casual wear.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/45/19/26/240_F_45192673_ZFaeHx6v6Hm2grh7jnnnuuzKoiUpuAKJ.jpg",
            "alt_text" => "Men's Cargo Pants",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Skinny Jeans",
            "price" => 89.99,
            "description" => "These women's skinny jeans are made of high-quality stretch denim material. They have a comfortable and flattering fit and feature a classic design with a modern twist. Perfect for everyday wear and special occasions.",
            "image_url" => "https://t4.ftcdn.net/jpg/02/01/09/85/240_F_201098554_vYmaSzVbKiumuMzqZXaNYCzYoFNH3Vqp.jpg",
            "alt_text" => "Women's Skinny Jeans",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's High-Waisted Pants",
            "price" => 79.99,
            "description" => "These women's high-waisted pants are made of high-quality and stretchy material. They have a flattering and comfortable fit and feature a classic and versatile design. Perfect for dressing up or down.",
            "image_url" => "https://t4.ftcdn.net/jpg/01/23/63/75/240_F_123637582_ue1qfiNPiH8eiOUTIexK3vNxvlvRySdi.jpg",
            "alt_text" => "Women's High-Waisted Pants",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Dress Pants",
            "price" => 99.99,
            "description" => "These men's dress pants are made of high-quality and durable material. They have a classic and versatile design and feature a comfortable fit with a modern and stylish look. Perfect for formal occasions and business wear.",
            "image_url" => "https://t3.ftcdn.net/jpg/01/31/00/60/240_F_131006084_xvDsbZtMf9jOqWNd8OEVeaMtmzB5ziFm.jpg",
            "alt_text" => "Men's Dress Pants",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Wide-Leg Pants",
            "price" => 69.99,
            "description" => "These women's wide-leg pants are made of high-quality and lightweight material. They have a comfortable and flattering fit and feature a trendy and stylish design. Perfect for summer and spring wear.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/91/28/22/240_F_91282204_EQSc2FIc5AXZDDTvMkRbMR9QfI3EEwjI.jpg",
            "alt_text" => "Women's Wide-Leg Pants",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Jogger Pants",
            "price" => 49.99,
            "description" => "These men's jogger pants are made of soft and comfortable material. They feature a tapered design with an elastic waistband and cuffs for a modern and stylish look. Perfect for casual wear and light exercise.",
            "image_url" => "https://t4.ftcdn.net/jpg/02/46/38/57/240_F_246385708_xSYAxuAgThzE3iaUWbYccnNl5yBJliCY.jpg",
            "alt_text" => "Men's Jogger Pants",
            "subcategory_id" => 13,
            "license_needed" => false
        ]);

        // Clothing - shoes
        Product::create([
            "name" => "Men's Tactical Boots",
            "price" => 99.99,
            "description" => "These men's tactical boots are made of high-quality leather and nylon material. They feature a slip-resistant sole, padded collar, and insole for added comfort and support. Perfect for military and outdoor activities.",
            "image_url" => "https://t3.ftcdn.net/jpg/02/69/77/38/240_F_269773879_baRIda4u0npjdjfUqy8FezAsTc5uAk6c.jpg",
            "alt_text" => "Men's Tactical Boots",
            "subcategory_id" => 14,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Women's Combat Boots",
            "price" => 89.99,
            "description" => "These women's combat boots are made of high-quality leather and feature a lace-up design for a secure fit. They have a cushioned insole and a rubber outsole for added comfort and traction. Perfect for military and outdoor activities.",
            "image_url" => "https://t3.ftcdn.net/jpg/01/12/30/78/240_F_112307894_F0t1FeTycWNApdxEPKigKRVAeb6HJ95O.jpg",
            "alt_text" => "Women's Combat Boots",
            "subcategory_id" => 14,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Men's Jungle Boots",
            "price" => 79.99,
            "description" => "These men's jungle boots are made of high-quality leather and canvas material. They feature a breathable lining and a slip-resistant sole for added comfort and safety. Perfect for military and outdoor activities in tropical environments.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/31/41/78/240_F_31417811_MaDRm2655C3me7WjE36UiqQDHIZqQNwd.jpg",
            "alt_text" => "Men's Jungle Boots",
            "subcategory_id" => 14,
            "license_needed" => false
        ]);
        
        Product::create([
            "name" => "Women's Hiking Boots",
            "price" => 109.99,
            "description" => "These women's hiking boots are made of high-quality leather and feature a waterproof and breathable membrane. They have a cushioned insole and a rubber outsole for added comfort and traction. Perfect for military and outdoor activities.",
            "image_url" => "https://t4.ftcdn.net/jpg/02/19/02/99/240_F_219029951_XIazmf97MEI4GbE8X4x5nEaBCsXCKUGh.jpg",
            "alt_text" => "Women's Hiking Boots",
            "subcategory_id" => 14,
            "license_needed" => false
        ]);

        // Clothing - socks
        Product::create([
            "name" => "Men's Athletic Socks",
            "price" => 12.99,
            "description" => "These men's athletic socks are made of high-quality material and are designed for maximum comfort and support. They feature a breathable mesh top and arch compression for a secure fit. Perfect for sports and everyday wear.",
            "image_url" => "https://t4.ftcdn.net/jpg/01/56/97/63/240_F_156976330_CbLxGsCI1QGMl8apV9am7wAuTVuTtMqv.jpg",
            "alt_text" => "Men's Athletic Socks",
            "subcategory_id" => 15,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Ankle Socks",
            "price" => 9.99,
            "description" => "These women's ankle socks are made of high-quality material and are designed for maximum comfort and style. They feature a cushioned sole and reinforced heel and toe for durability. Perfect for everyday wear and exercise.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/80/97/84/240_F_80978422_LhK9Ao5drjDFyLm3vlDfffmfYOt9Xrqi.jpg",
            "alt_text" => "Women's Ankle Socks",
            "subcategory_id" => 15,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Men's Military Socks",
            "price" => 14.99,
            "description" => "These men's Military socks are made of high-quality material and are designed for maximum comfort and style. They feature a reinforced heel and toe and a ribbed cuff for a secure fit.",
            "image_url" => "https://t3.ftcdn.net/jpg/03/90/87/92/240_F_390879286_xkrHCJKgLFKoNaLjWsTUOs1wdFAv3m2r.jpg",
            "alt_text" => "Men's military Socks",
            "subcategory_id" => 15,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Women's Knee High Socks",
            "price" => 16.99,
            "description" => "These women's knee high socks are made of high-quality material and are designed for maximum comfort and style. They feature a reinforced heel and toe and a ribbed cuff for a secure fit. Perfect for casual and dressy occasions.",
            "image_url" => "https://t4.ftcdn.net/jpg/01/79/24/53/240_F_179245318_ztWSb9MqyoH6tDc2QCpY9UthtOFBVuLL.jpg",
            "alt_text" => "Women's Knee High Socks",
            "subcategory_id" => 15,
            "license_needed" => false
        ]);

        // Explosives - C4s
        Product::create([
            "name" => "C4 Explosive",
            "price" => 5999.99,
            "description" => "This bomb is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/36/30/26/240_F_36302691_76tFbSeySxWq501jPdR1ZJzS4Vl5zdEw.jpg",
            "alt_text" => "C4 Explosive",
            "subcategory_id" => 16,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "TNT",
            "price" => 5999.99,
            "description" => "This bomb is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t4.ftcdn.net/jpg/00/92/35/97/240_F_92359714_quGtumtnjGuerKw18AIy1TxKDBeCtQRZ.jpg",
            "alt_text" => "TNT",
            "subcategory_id" => 16,
            "license_needed" => true
        ]);

        // Explosives - Nukes
        Product::create([
            "name" => "Nuke",
            "price" => 999999.99,
            "description" => "This nuke is an explosive that is capable of much damage, please don't use.",
            "image_url" => "https://t4.ftcdn.net/jpg/05/94/19/91/240_F_594199164_H4wxl1HgGr8xgsiTcwIN7iF9KH5Fntx9.jpg",
            "alt_text" => "Nuke",
            "subcategory_id" => 17,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "War missile",
            "price" => 599999.99,
            "description" => "This product is only for military purposes and normal people can not buy it.",
            "image_url" => "https://t4.ftcdn.net/jpg/01/26/85/69/240_F_126856912_3UHfnfbiergdF2l8GylpDeP8MZ0cGzyA.jpg",
            "alt_text" => "War missile",
            "subcategory_id" => 17,
            "license_needed" => true
        ]);

        // Explosives - grenades
        Product::create([
            "name" => "Hand grenade",
            "price" => 799.99,
            "description" => "This grenade is an explosive that is capable of much damage, it is a very practical weapon, use at own risk.",
            "image_url" => "https://t4.ftcdn.net/jpg/00/68/93/79/240_F_68937963_UlPZa0adICFYigjELmihcDpbNkqqe8hz.jpg",
            "alt_text" => "Grenade",
            "subcategory_id" => 18,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Large grenade",
            "price" => 1599.99,
            "description" => "This grenade is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t4.ftcdn.net/jpg/00/39/91/45/240_F_39914572_CXCA6G3KcByvXCu4A4N5qPpYBTDv0DQ2.jpg",
            "alt_text" => "Grenade large",
            "subcategory_id" => 18,
            "license_needed" => true
        ]);

        // Explosives - TNTs
        Product::create([
            "name" => "TNT Small",
            "price" => 29999.99,
            "description" => "This TNT is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/58/61/36/240_F_58613691_C8XgSJqsShJ29I6WBO1TPtLwHD1LyCv0.jpg",
            "alt_text" => "TNT small",
            "subcategory_id" => 19,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "TNT Medium",
            "price" => 49999.99,
            "description" => "This TNT is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t3.ftcdn.net/jpg/01/42/39/00/240_F_142390064_6y5xybtR6Z3p1j0bqQ37SVGCIlFpRm0N.jpg",
            "alt_text" => "TNT Medium",
            "subcategory_id" => 19,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "TNT Large",
            "price" => 89999.99,
            "description" => "This TNT is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/37/37/32/240_F_37373298_rUHpK0XYEqXEDuQMAOqXx3HP4dODuUkc.jpg",
            "alt_text" => "TNT Large",
            "subcategory_id" => 19,
            "license_needed" => true
        ]);

        // Explosives - bombs
        Product::create([
            "name" => "Small bomb",
            "price" => 89999.99,
            "description" => "This bomb is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t3.ftcdn.net/jpg/01/34/44/62/240_F_134446208_9IYfjQvasXGQK3Tw0WR2Nt4vtHlOrTsr.jpg",
            "alt_text" => "Small bomb",
            "subcategory_id" => 20,
            "license_needed" => true
        ]);

        // Explosives - bombs
        Product::create([
            "name" => "Medium bomb",
            "price" => 129999.99,
            "description" => "This bomb is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/41/91/42/240_F_41914293_VtHyUkYZlkmqm0461PhfhatOVrJSy81J.jpg",
            "alt_text" => "Medium bomb",
            "subcategory_id" => 20,
            "license_needed" => true
        ]);

        // Explosives - bombs
        Product::create([
            "name" => "Large bomb",
            "price" => 149999.99,
            "description" => "This bomb is an explosive that is capable of much damage, use at own risk.",
            "image_url" => "https://t4.ftcdn.net/jpg/00/45/23/63/240_F_45236361_UmsHcgCSgjq8f7KbX0YrcMmHEDdfkon4.jpg",
            "alt_text" => "Large bomb",
            "subcategory_id" => 20,
            "license_needed" => true
        ]);

        // Equipment - backpacks
        Product::create([
            "name" => "Tactical Backpack",
            "price" => 79.99,
            "description" => "This tactical backpack is made of high-quality and durable material. It features multiple compartments for organizing your gear, and is designed to be comfortable to wear for extended periods of time. Perfect for outdoor adventures and everyday use.",
            "image_url" => "https://t3.ftcdn.net/jpg/02/67/44/76/240_F_267447676_0KoUhtnI4gj8TI5ElIfNC7gjNjLSREwH.jpg",
            "alt_text" => "Tactical Backpack",
            "subcategory_id" => 21,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Assault Backpack",
            "price" => 99.99,
            "description" => "This assault backpack is designed for durability and functionality. It features a spacious main compartment, multiple external pockets, and MOLLE webbing for attaching additional gear. Perfect for military and law enforcement use.",
            "image_url" => "https://t4.ftcdn.net/jpg/01/31/16/55/240_F_131165572_MdvaxXdFUmlM0E94s8TwJxyTQC7uC6BP.jpg",
            "alt_text" => "Assault Backpack",
            "subcategory_id" => 21,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Camouflage Backpack",
            "price" => 59.99,
            "description" => "This camouflage backpack is perfect for blending in with your surroundings. It features a spacious main compartment, padded shoulder straps, and multiple pockets for organizing your gear. Perfect for hunting and camping trips.",
            "image_url" => "https://t4.ftcdn.net/jpg/05/76/39/51/240_F_576395177_JoRQqfJz8bh8W7DXqBr8rlpIv69dGaMl.jpg",
            "alt_text" => "Camouflage Backpack",
            "subcategory_id" => 21,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Hydration Backpack",
            "price" => 49.99,
            "description" => "This hydration backpack is designed for outdoor activities and features a water bladder with a drinking tube. It also has a spacious main compartment and multiple pockets for storing your gear. Perfect for hiking and biking.",
            "image_url" => "https://t4.ftcdn.net/jpg/01/15/29/35/240_F_115293537_0jngICrmIIMt3eCAM5DsEKJGoZy3RdeI.jpg",
            "alt_text" => "Hydration Backpack",
            "subcategory_id" => 21,
            "license_needed" => false
        ]);

        // Equipment - hunting
        Product::create([
            "name" => "Hunting Rifle",
            "price" => 899.99,
            "description" => "This hunting rifle is made of high-quality materials and features a durable and ergonomic design. It has a smooth trigger pull and a detachable magazine for easy reloading. Perfect for hunting big game.",
            "image_url" => "https://t3.ftcdn.net/jpg/03/06/23/42/240_F_306234268_QR25znBW5XEMXbRjA2Vo9JA5rCQTLOec.jpg",
            "alt_text" => "Hunting Rifle",
            "subcategory_id" => 22,
            "license_needed" => true
        ]);

        Product::create([
            "name" => "Hunting Binoculars",
            "price" => 149.99,
            "description" => "These hunting binoculars are made of high-quality materials and feature a compact and lightweight design. They have a wide field of view and high magnification for clear and crisp images. Perfect for spotting game from a distance.",
            "image_url" => "https://t3.ftcdn.net/jpg/02/29/25/40/240_F_229254092_5cySLF0sMcfM4C0a4oe6cmlvWv3IBDT6.jpg",
            "alt_text" => "Hunting Binoculars",
            "subcategory_id" => 22,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Hunting Knife",
            "price" => 79.99,
            "description" => "This hunting knife is made of high-quality steel and features a comfortable and ergonomic handle. It has a sharp and durable blade for precision cutting and is perfect for skinning and cleaning game.",
            "image_url" => "https://t4.ftcdn.net/jpg/02/67/36/99/240_F_267369942_qJ6RstEIao50FPXV4gmzP57YVzuJ3ZMk.jpg",
            "alt_text" => "Hunting Knife",
            "subcategory_id" => 22,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Hunting Backpack",
            "price" => 199.99,
            "description" => "This hunting backpack is made of high-quality and durable materials. It has multiple compartments and pockets for storing hunting gear and features a comfortable and adjustable strap system for a secure and comfortable fit. Perfect for extended hunting trips.",
            "image_url" => "https://t3.ftcdn.net/jpg/03/84/73/04/240_F_384730442_d5YTncTzyIl2fHfXadJ3lJVgzWZycGe5.jpg",
            "alt_text" => "Hunting Backpack",
            "subcategory_id" => 22,
            "license_needed" => false
        ]);

        // Equipment - camping
        Product::create([
            "name" => "4-Person Tent",
            "price" => 149.99,
            "description" => "This 4-person tent is made of high-quality materials and is designed to withstand the elements. It features a spacious interior and has multiple windows for ventilation. Perfect for camping and outdoor activities.",
            "image_url" => "https://t4.ftcdn.net/jpg/02/36/31/83/240_F_236318320_nDa7zpTVK7HSbtJbw7sTYhiiHpoYSF05.jpg",
            "alt_text" => "4-Person Tent",
            "subcategory_id" => 23,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Sleeping Bag",
            "price" => 89.99,
            "description" => "This high-quality sleeping bag is designed to keep you warm and comfortable during cold nights. It is made of durable materials and features a soft and cozy interior. Perfect for camping and outdoor activities.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/60/71/20/240_F_60712075_xicv2z3WxHrhat05iMfVNq3xy5vNlrBZ.jpg",
            "alt_text" => "Sleeping Bag",
            "subcategory_id" => 23,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Camping Chair",
            "price" => 39.99,
            "description" => "This camping chair is made of high-quality materials and is designed for maximum comfort and durability. It features a sturdy frame and a comfortable seat and backrest. Perfect for camping and outdoor activities.",
            "image_url" => "https://t4.ftcdn.net/jpg/01/63/75/19/240_F_163751935_T1KCOZhwEfnzVml77VO62K2qHGmexauG.jpg",
            "alt_text" => "Camping Chair",
            "subcategory_id" => 23,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Portable Camping Stove",
            "price" => 69.99,
            "description" => "This portable camping stove is made of high-quality materials and is designed to be lightweight and easy to use. It features a durable and efficient burner and is compatible with most fuel canisters. Perfect for camping and outdoor activities.",
            "image_url" => "https://t4.ftcdn.net/jpg/03/38/53/67/240_F_338536703_IHmbJNE80z7AnJXwEX7rLwcwfPwGfVTn.jpg",
            "alt_text" => "Portable Camping Stove",
            "subcategory_id" => 23,
            "license_needed" => false
        ]);


        // Accessories - glasses
        Product::create([
            "name" => "Tactical Goggles",
            "price" => 49.99,
            "description" => "These tactical goggles are made of high-strength polycarbonate and feature a comfortable foam lining. They have an adjustable strap and provide excellent protection against dust, wind, and debris. Perfect for outdoor activities and combat training.",
            "image_url" => "https://t3.ftcdn.net/jpg/01/12/78/20/240_F_112782003_6j6PU6aZrvPszwYTlcHqYvgVAL9D2wNz.jpg",
            "alt_text" => "Tactical Goggles",
            "subcategory_id" => 24,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Ballistic Sunglasses",
            "price" => 89.99,
            "description" => "These ballistic sunglasses are made of high-quality polycarbonate and feature shatterproof lenses. They provide excellent protection against UV rays and flying debris. Perfect for military operations and outdoor activities.",
            "image_url" => "https://t3.ftcdn.net/jpg/05/54/70/54/240_F_554705477_rmX7FWSC2M9GkarbQ1QsXCs2QPTSVVn8.jpg",
            "alt_text" => "Ballistic Sunglasses",
            "subcategory_id" => 24,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Aviator Glasses",
            "price" => 59.99,
            "description" => "These aviator glasses are made of high-quality metal and feature polycarbonate lenses. They have a classic design and provide excellent protection against glare and UV rays. Perfect for military pilots and aviation enthusiasts.",
            "image_url" => "https://t3.ftcdn.net/jpg/04/72/36/50/240_F_472365025_EhnlrWYeqREXUKUkgUhzdYyUP09lukLm.jpg",
            "alt_text" => "Aviator Glasses",
            "subcategory_id" => 24,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Combat Glasses",
            "price" => 79.99,
            "description" => "These combat glasses are made of high-strength polycarbonate and feature a wraparound design for maximum protection. They have a comfortable foam lining and an adjustable strap. Perfect for military and law enforcement personnel.",
            "image_url" => "https://t4.ftcdn.net/jpg/05/81/24/67/240_F_581246781_7YtsAaeS77OcGZi7JLLvyRX5dJxzZfWj.jpg",
            "alt_text" => "Combat Glasses",
            "subcategory_id" => 24,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Night Vision Goggles",
            "price" => 199.99,
            "description" => "These night vision goggles are designed for maximum visibility in low-light conditions. They feature a durable and ergonomic frame and are equipped with advanced night vision technology. Perfect for military and law enforcement use.",
            "image_url" => "https://t4.ftcdn.net/jpg/04/71/55/61/240_F_471556110_OfWdEI9l1p3tw9dSlrrsgFJmKcDrBI9m.jpg",
            "alt_text" => "Night vision goggles",
            "subcategory_id" => 24,
            "license_needed" => false
        ]);

        // Accessories - paint
        Product::create([
            "name" => "Water-Based Face Paint Palette",
            "price" => 19.99,
            "description" => "This water-based face paint palette contains 12 vibrant colors that are easy to apply and wash off. It is non-toxic and safe for all skin types, making it perfect for kids and adults alike.",
            "image_url" => "https://t4.ftcdn.net/jpg/01/40/17/53/240_F_140175350_RuKwSjgQLNfuJ74nOppMgMHEdrnNWhzo.jpg",
            "alt_text" => "Water-Based Face Paint Palette",
            "subcategory_id" => 25,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "UV Glow Face Paint",
            "price" => 14.99,
            "description" => "This UV glow face paint is perfect for parties and festivals. It comes in 6 bright colors that glow under black light, making it a fun and unique addition to any outfit.",
            "image_url" => "https://t3.ftcdn.net/jpg/02/64/95/98/240_F_264959889_Ep9vMl1mACbnz2zuJC91Gfa2Cr8akmOo.jpg",
            "alt_text" => "UV Glow Face Paint",
            "subcategory_id" => 25,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Metallic Face Paint",
            "price" => 9.99,
            "description" => "This metallic face paint is perfect for adding some shine to your look. It comes in 5 beautiful colors that are easy to apply and long-lasting.",
            "image_url" => "https://t4.ftcdn.net/jpg/00/34/86/81/240_F_34868134_mptA73zXdbZcIgfpJz7FIHydkywdX1xA.jpg",
            "alt_text" => "Metallic Face Paint",
            "subcategory_id" => 25,
            "license_needed" => false
        ]);


        // Accessories - camouflage
        Product::create([
            "name" => "Camouflage Backpack",
            "price" => 49.99,
            "description" => "This camouflage backpack is made of high-quality material and is designed to blend in with natural surroundings. It features multiple compartments for storage and a padded back and straps for comfort. Perfect for outdoor activities and everyday use.",
            "image_url" => "https://t4.ftcdn.net/jpg/05/76/39/51/240_F_576395177_JoRQqfJz8bh8W7DXqBr8rlpIv69dGaMl.jpg",
            "alt_text" => "Camouflage Backpack",
            "subcategory_id" => 26,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Camouflage Hat",
            "price" => 19.99,
            "description" => "This camouflage hat is made of high-quality material and features a comfortable fit and a classic design. Perfect for outdoor activities and everyday wear.",
            "image_url" => "https://t4.ftcdn.net/jpg/03/70/79/91/240_F_370799140_0m0rdeziss3KIKk2jyM18fahKuzK7MIy.jpg",
            "alt_text" => "Camouflage Hat",
            "subcategory_id" => 26,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Camouflage Gloves",
            "price" => 29.99,
            "description" => "These camouflage gloves are made of high-quality material and feature a comfortable fit and durable design. Perfect for outdoor activities and tactical use.",
            "image_url" => "https://t3.ftcdn.net/jpg/05/32/07/82/240_F_532078251_3PRyUw5yDNGVoyZNv9qBbcryDv64xiVx.jpg",
            "alt_text" => "Camouflage Gloves",
            "subcategory_id" => 26,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Camouflage Bandana",
            "price" => 12.99,
            "description" => "This camouflage bandana is made of high-quality material and features a versatile design. Perfect for outdoor activities and tactical use.",
            "image_url" => "https://t3.ftcdn.net/jpg/02/96/44/32/240_F_296443238_X2kv56HuNDvj9jzKtbzS3NxSvbVKSHAq.jpg",
            "alt_text" => "Camouflage Bandana",
            "subcategory_id" => 26,
            "license_needed" => false
        ]);

        Product::create([
            "name" => "Camouflage Belt",
            "price" => 24.99,
            "description" => "This camouflage belt is made of high-quality material and features a durable design and a secure buckle. Perfect for outdoor activities and tactical use.",
            "image_url" => "https://t3.ftcdn.net/jpg/00/52/67/02/240_F_52670282_MS5lyWVlrluQqSCYKTg8qgD1jxaN76iJ.jpg",
            "alt_text" => "Camouflage Belt",
            "subcategory_id" => 26,
            "license_needed" => false
        ]);

        // Accessories - tactical
        Product::create([
            "name" => "Tactical Backpack",
            "price" => 99.99,
            "description" => "This tactical backpack is made of high-quality material and features a durable design and multiple compartments for storage. Perfect for outdoor activities and tactical use.",
            "image_url" => "https://t4.ftcdn.net/jpg/03/70/79/91/240_F_370799140_0m0rdeziss3KIKk2jyM18fahKuzK7MIy.jpg",
            "alt_text" => "Tactical Backpack",
            "subcategory_id" => 27,
            "license_needed" => false
        ]);


    }
}