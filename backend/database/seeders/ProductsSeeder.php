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
            "description" => "The SIG Sauer P250 is a semi-automatic pistol made by J.P. Sauer & Sohn, and SIG Sauer of Exeter, New Hampshire. The SIG Sauer P250 can be chambered in .357 SIG, .40 S&W, .45 ACP, and 9×19mm Parabellum. Like other SIG-Sauer pistols, the P250 pistol is a short recoil operated, locked breech pistol. It uses the typical SIG-Sauer cam-operated barrel, which locks into the ejection port on the slide.",
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
            "description" => "The P90 is a selective fire, straight blowback-operated weapon with a cyclic rate of fire of around 850–1,100 rounds per minute. The weapon is chambered for FN's 5.7×28mm ammunition. Its unusual shape is based on extensive ergonomic research.",
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
            "description" => "The MP7 is a German personal defense weapon (PDW) developed by Heckler & Koch (H&K), and is intended to replace H&K's MP5 submachine gun. Intended to compete with the P90, the MP7 fires the 4.6x30mm cartridge, a competitor to the P90's 5.7×28mm cartridge, which has good armor piercing capabilities in real life.",
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


    }
}