<?php

use AC\Models\Producer;
use Illuminate\Database\Seeder;

class ProducersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $producers = [
            '10Gauge', '12 Diary Holders', '1st PLACE', '3xCube', '4Kids Entertainment', '501st JOINT FIGHTER WING',
            '81 Produce', '8bit', 'A Line', 'A-1 Pictures', 'A-Real', 'A.C.G.T.', 'AC Create', 'Academy Productions',
            'ACC Production', 'Acchi Kocchi Production Committee', 'ACiD FiLM', 'Actas', 'Active', 'Adult Source Media',
            'ADV Films', 'Advance Syakujii', 'Age', 'Age Global Networks', 'Agent 21', 'Ai Addiction',
            'Ai ga areba Daijobu', 'AIC', 'AIC A.S.T.A.', 'AIC Build', 'AIC Frontier', 'AIC Plus+', 'AIC Spirits',
            'AIC Takarazuka', 'Aikikaku Center', 'Aiko', 'AIR AGENCY', 'Ajia-Do', 'AKB0048 Production Committee',
            'AKOM', 'Alchemist', 'AliceSoft', 'Allure', 'Amber Film Works', 'AMG MUSIC', 'Amino', 'Amuse Pictures',
            'An DerCen', 'Anchor Bay Films', 'Angelfish', 'ANIK', 'Animac', 'AniMan', 'Animaruya', 'Animate Film',
            'Animation 21', 'Animation Do', 'Animax', 'Anime Midstream', 'Anime R', 'Animeigo', 'Aniplex',
            'Aniplex of America', 'Ankama', 'Annapuru', 'Anpro', 'Answer Studio', 'Apollon', 'APPP', 'Arcturus',
            'Armor', 'Arms', 'Arplants', 'Artland', 'Artmic', 'Asahi Production', 'Asatsu DK', 'Ascension',
            'ASCII Media Works', 'Ashi Productions', 'ASIA Documentary Productions', 'Asia-Do',
            'Asmik Ace Entertainment', 'Asread', 'Assez Finaud Fabric', 'Astarotte no Omocha! Production Committee',
            'AT-2', 'AT-X', 'Atelier Musa', 'Atlus', 'Aubec', 'Audio Highs', 'Automatic Flowers Studio',
            'Avaco Creative Studios', 'Avex Entertainment', 'Avex Pictures', 'AYCO', 'Azeta Pictures',
            'Azumanga Daioh Production Committee', 'Bandai', 'Bandai Entertainment', 'Bandai Namco Games',
            'Bandai Namco Live Creative', 'Bandai Namco Pictures', 'Bandai Visual', 'Banpresto', 'Baramiri',
            'Barnum Studio', 'BEAM Entertainment', 'Beat Frog', 'Bee Media', 'Bee Train', 'BeeWorks',
            'Beijing Sharaku Art', 'Being', 'Benesse Corporation', 'BeSTACK', 'Big Bang', 'Big West', 'BIGLOBE',
            'Bliss Pictures', 'Blue Eyes', 'Blue Impact', 'BMG Japan', 'Bones', 'BOOTLEG', 'Brains Base', 'BreakBottle',
            'Bridge', 'Broccoli', 'BS Fuji', 'BS-i', 'BS-TBS', 'Buemon', 'Bushiroad Inc.', 'Byakuya Shobo', 'C-Station',
            'C2C', 'Calf Studio', 'Cammot', 'Capcom', 'Carp Studio', 'Casio Entertainment', 'CBC', 'Central Park Media',
            'Chaos Project', 'chara-ani.com', 'Charaction', 'CherryLips', 'ChiChinoya', 'Chrono Gear Creative',
            'ChuChu', 'Chungeorahm Film', 'Cinema Tohoku', 'Coamix', 'Code', 'Collaboration Works', 'Comic Umenohone',
            'CoMix Wave Films', 'Comstock, Ltd.', 'Connect', 'Cookie Jar Entertainment', 'Cosmic Ray', 'Cosmos',
            'Cospa', 'Cotton Doll', 'Cranberry', 'Creative Bridge', 'Creators in Pack', 'Crimson Star Media',
            'Critical Mass Video', 'Crossphere', 'CyberConnect2', 'CyberStep', 'Cyclone Graphics inc', 'd-rights',
            'D.A.S.T.', 'D3', 'Daewon Media', 'Daiei', 'Daiichi Kosho Co.', 'Daiko', 'DandeLion Animation Studio LLC',
            'Daume', 'David Production', 'DAX Production', 'Delphi Sound', 'Dentsu', 'Dentsu Eigasha Tokyo',
            'Dentsu Entertainment USA', 'Devil Survivor 2 Animation Committee', 'Dibetagurashi Production Committee',
            'DiC Entertainment', 'Digital Frontier', 'Digital Media Lab', 'Digital Works', 'Diomedea', 'Directions',
            'Discotek', 'Discovery', 'DIVE II Entertainment', 'DLE', 'Doga Kobo', 'DOGA Productions', 'Dongwoo A&E',
            'Dream Creation', 'Dream Force', 'Dwango', 'Dwango Music Entertainment', 'dwarf', 'Dynamic Planning',
            'Dynamo Pictures', 'E&G Films', 'Earth Star Entertainment', 'Easy Film', 'Echo', 'Egg', 'Eiken',
            'ElectromagneticWave', 'Elevenarts', 'EMI', 'EMT² ', 'Encourage Films', 'Enoki Films', 'Enterbrain',
            'Epoch', 'Evil Line Records', 'Eye Move', 'F.M.F', 'Fairy Dust', 'Fanworks', 'Feel', 'feng', 'Fifth Avenue',
            'Film Workshop', 'Filmlink International', 'Five Ways', 'Flatiron Film Company', 'Flex Comics',
            'flying DOG', 'FOREST Hunting One', 'Four Some', 'Front Line', 'Frontier Works',
            'Fuji Pacific Music Publishing', 'Fuji TV', 'Fuji Video', 'FUNimation Entertainment', 'Future Planet',
            'G&G Entertainment', 'G-mode', 'GAGA Communications', 'Gainax', 'Gakken', 'Gakken Eigakyoku', 'GANSIS',
            'Gathering', 'GDH', 'Geijutsu Eigasha', 'GEN Productions', 'Genco', 'Gendai Production',
            'Geneon Universal Entertainment', 'Gentosha Comics', 'gimik', 'Ginga Ya', 'GKids', 'Glams', 'Glovision',
            'GODxDOG Production ', 'GoHands', 'Gonzo', 'Good Smile Company', 'Graphinica', 'Grasshoppa!', 'Green Bunny',
            'Grooove', 'Group TAC', 'Grouper Productions', 'H.O.T.D Production Committee',
            'Hakoniwa Academy Student Council', 'Hakusensha', 'Hal Film Maker', 'Half H.P Studio', 'Hang Zhou StarQ',
            'Happinet Pictures', 'Harappa', 'Hasbro', 'Hatsukoi Limited Production Committee', 'HeART-BIT',
            'Heewon Entertainment', 'Hero Communication', 'Higa Brothers Production',
            'Hiiro No Kakera Production Committee', 'Himajin Planning', 'Himeyuri Alumnae Incorporated Foundation',
            'Hobby Japan', 'Hokkaido Azmacy Co., Ltd.', 'Hokkaido Cultural Broadcasting Co., Ltd.',
            'Hoods Entertainment', 'Horannabi', 'Horipro', 'Hoso Seisaku Doga', 'Hot Bear', 'Hotline', 'Houbunsha',
            'HS Pictures Studio', 'I was a Ballerina', 'I-move', 'I.Toon', 'Idea Factory', 'ILCA', 'Image Kei', 'Imagi',
            'Imagica', 'Imagica West', 'Imagin', 'Indeprox', 'Index', 'indigo line', 'ING', 'Innocent Grey',
            'International Digital Artist', 'Inu x Boku SS Production Partners', 'Ishikawa Pro', 'Itasca Studio',
            'Iwatobi High School Swimming Club', 'ixtl', 'Iyasakadou Film', 'J.C.Staff', 'Jade Animation', 'Jam',
            'Japan Aerospace Exploration Agency', 'Japan Home Video', 'Japan Vistec', 'JapanAnime',
            'Jinnis Animation Studios', 'JM animation', 'Jormungand Production Partners', 'Jules Bass', 'Jumondo',
            'K-Factory', 'Kachidoki Studio', 'Kadokawa Contents Gate', 'Kadokawa Pictures Japan',
            'Kadokawa Pictures USA', 'Kadokawa Shoten', 'Kaeruotoko Shokai', 'KAGAYA Studio', 'Kamikaze Douga',
            'Kanaban Graphics', 'Kaname Productions', 'Karaku', 'Katsudou-manga-kan', 'Kawamoto Productions',
            'Kazami Gakuen Koushiki Douga-bu', 'KBS', 'Kenji Studio', 'KENMedia', 'Key', 'KeyEast', 'Kids Station',
            'Kimi To Boku Production Partners', 'Kinema Citrus', 'King Bee', 'Kino Production', 'Kitty Films',
            'Kitty Media', 'Kiyosumi High School Mahjong Club', 'KMMJ Studios', 'Knack Animation', 'Knack Productions',
            'Kodansha', 'Koei', 'Koichi Kikuchi', 'Kojiro Shishido Animation Works', 'Kokusai Eigasha', 'Konami',
            'KOO-KI', 'KSS', 'Kuri Jikken Manga Kobo', 'Kyodo Eiga', 'Kyokuichi Tokyo Movie Shinsha', 'Kyoto Animation',
            'Kyotoma', 'Kyowa Film', 'L.', 'Lambert', 'LandQ studios', 'Langmaor', 'Lantis', 'Lapis',
            'Larx Entertainment', 'Lay-duce', 'L²Studio', 'Lemon Heart', 'Lerche', 'LIDENFILMS', 'Life Work Corp.',
            'Liverpool', 'LMD', 'Lucent Pictures Entertainment', 'Lucky Paradise', 'Lune Pictures', 'm.o.e.', 'M.S.C',
            'Mad Box', 'Madhouse', 'Madoka Partners', 'Mages', 'Magic Bus', 'Magic Capsule', 'Magic Lantern Film',
            'Maiden Japan', 'Maikaze', 'Mainichi Broadcasting', 'Majin', 'Manga Entertainment', 'Manglobe', 'MAPPA',
            'Maru Production ', 'Marubeni', 'Marvel Entertainment', 'Marvelous AQL', 'Marvelous Entertainment',
            'Marvy Jack', 'Mary Jane', 'Marza Animation Planet', 'Maxell E-Cube', 'Möbius Tone', 'Media Blasters',
            'Media Castle', 'Media Factory', 'MediaNet', 'Mellow Head', 'Memory-Tech',
            'Mikakunin de Shinkoukei Production Committee', 'Milkshake', 'Milky Animation Label', 'Milky Cartoon',
            'Millepensee', 'Minami Machi Bugyousho', 'Miracle Robo', 'Mirai Film', 'Miramax Films', 'Misseri Studio',
            'Mistral Japan', 'MK Pictures', 'MMDGP', 'MMG', 'Mobcast', 'MooGoo', 'Mook Animation', 'Moonstone Cherry',
            'Movic', 'MS Pictures', 'Mushi Productions', 'My Melody Production Committee', 'N&G Production',
            'Nakamura Production', 'Namco Bandai Games', 'NAS', 'Natsuiro Kiseki Production Partners', 'Natural High',
            'NAZ', 'NBCUniversal Entertainment', 'Nelvana', 'Nexon', 'Next Media Animation', 'Nexus', 'NHK',
            'NHK Enterprises', 'NHK-BS1', 'NHK-BS2', 'Nichiei Agency', 'Nihikime no Dozeu', 'Nihon Ad Systems',
            'Nihon Falcom', 'Nihon Hoso Eigasha', 'Nikkatsu', 'Nikkatsu Mukojima', 'Nintendo Co., Ltd.',
            'Nintendo of America', 'Nippon Animation', 'Nippon Columbia', 'Nippon Shuppan Hanbai (Nippan) K.K.',
            'Nippon Television Network Corporation', 'NIS America, Inc.', 'Nitroplus', 'Nomad', 'Notes', 'NOTTV',
            'NTT Docomo', 'NuTech Digital', 'NYAV Post', 'OB Planning', 'Obtain Future', 'Oddjob', 'Office AO',
            'Office DCI', 'Office Take Off', 'Oh! Production', 'OLE-M', 'Olive Studio', 'OLM Digital', 'Omnibus Japan',
            'Opera House', 'Orange', 'Ordet', 'Oriental Light and Magic', 'Osaka University of Arts',
            'Otogi Production', 'Oxybot', 'Oz', 'P Productions', 'P.A. Works', 'Palm Studio', 'Panda Factory',
            'Panmedia', 'Pashmina', 'Passione', 'Pastel', 'Peter Pan Creation', 'Phoenix Entertainment', 'Picograph',
            'Picture Magic', 'Pie in The Sky', 'Pierrot Plus', 'Pine Jam', 'Pink Pineapple', 'Pioneer LDC', 'Pixy',
            'Planet', 'Plum', 'Plus Heads', 'Po10tial', 'Pollyanna Graphics', 'Polygon Pictures', 'Polygram Japan',
            'Poncotan', 'Pony Canyon', 'Pony Canyon Enterprises', 'Ponycan USA', 'PoPoCo', 'PoRO', 'Postgal Workshop',
            'PPM', 'PPP', 'PRA', 'Primastea', 'PrimeTime', 'Procidis', 'Production I.G', 'Production IMS',
            'Production Reed', 'Project Eureka AO', 'Project IS', 'Project No Name', 'Project No.9', 'Project Railgun',
            'Project Team Eikyuu Kikan', 'Public & Basic', 'Pupa Production Committee', 'Purple Cow Studio Japan',
            'Puzzle Animation Studio Limited', 'Q-Tec', 'Queen Bee', 'Rabbit Gate', 'Radix',
            'Raku High Student Council', 'Rakuonsha', 'RAMS', 'Rankin/Bass', 'RCC Chugoku Broadcasting', 'Remic',
            'RG Animation Studios', 'Right Gauge', 'Right Stuf', 'Rikuentai', 'Ripple Film', 'Rising Force', 'Robot',
            'Romanov Films', 'Romantica club !! ', 'Rondo Robe', 'RTHK', 'Ruby-Spears Productions ',
            'Ryukyu Asahi Broadcasting', 'Saban Entertainment', 'Saki Achiga-hen Production Committee',
            'Saki Zenkoku-hen Production Committee', 'Sakura Color Film', 'Sakura Create',
            'Sakura Motion Picture Co., Ltd.', 'Sakura Production', 'SamBakZa', 'San-X', 'Sanctuary',
            'Sankarea Production Committee', 'Sanrio', 'Sanrio Digital', 'SANZIGEN', 'Satelight',
            'Sav! The World Productions', 'SBS TV Production', 'Schoolzone', 'Sega', 'seikaisha', 'SEK Studios',
            'Sengoku Collection Production Committee', 'Senran Kagura Partners', 'Sentai Filmworks', 'Seta Corporation',
            'Seven', 'Seven Arcs', 'Shaft', 'Shanghai Animation Film Studio', 'Shelty', 'Shin-Ei Animation',
            'Shinano Kikaku', 'Shingeki no Kyojin Team', 'Shinkuukan', 'Shinwon Productions', 'Shinyusha', 'Shirogumi',
            'Shochiku', 'Shogakukan Music & Digital Entertainment', 'Shogakukan Productions', 'Showgate',
            'Shuuhei Morita', 'SIGNAL MD', 'Silky’s', 'Silver Link', 'Skouras', 'SKY Perfect Well Think', 'Slowcurve',
            'SME Visual Works', 'Soft Garage', 'Soft on Demand', 'SoftBank Creative Corp.', 'SoftCel Pictures', 'SoftX',
            'Sogo Vision', 'Sol Blade', 'Sola Digital Arts', 'Solid Vox', 'Sony Music Communications',
            'Sony Music Entertainment', 'Sony Pictures Entertainment', 'Sotsu Agency', 'Souten Studio', 'Sovat Theater',
            'Soyuzmultfilm ', 'Space Neko Company Ltd.', 'Sparky Animation', 'SPEED', 'Square Enix',
            'Starchild Records', 'Steve N\' Steven', 'Strawberry Meets Pictures', 'Studio 1st', 'Studio 3Hz',
            'Studio 4°C', 'Studio 9 Maiami', 'Studio A-CAT', 'Studio Anima', 'Studio Binzo', 'Studio Blanc',
            'Studio Bogey', 'Studio Cab', 'Studio Chizu', 'Studio Cockpit', 'Studio Colorido', 'Studio Comet',
            'Studio Compile', 'Studio Curtain', 'Studio Dadashow', 'Studio Deen', 'Studio Deva Loka', 'Studio Don Juan',
            'Studio Egg', 'Studio Eromatick', 'Studio Fantasia', 'Studio Flag', 'Studio G-1Neo', 'Studio Gallop',
            'Studio GDW', 'Studio Ghibli', 'Studio Gokumi', 'Studio GOONEYS', 'Studio Gram', 'Studio Hibari',
            'Studio Izena', 'Studio Jack', 'Studio Junio', 'Studio Junior', 'Studio Kaab', 'Studio Kajino',
            'Studio Kelmadick', 'Studio Khara', 'Studio Kikan', 'Studio Korumi', 'Studio Kuma', 'Studio Kyuuma',
            'Studio Liberty', 'Studio Lotus', 'Studio Matrix', 'Studio Mausu', 'Studio Mirai', 'Studio Moriken',
            'Studio MWP', 'Studio Nem', 'Studio NOA', 'Studio Nue', 'Studio Pastoral', 'Studio Pierrot',
            'Studio PuYUKAI', 'Studio Rikka', 'Studio Saki Makura', 'Studio Shuka ', 'Studio Sign', 'Studio Signal',
            'Studio Take Off', 'Studio Tron', 'Studio Tulip', 'Studio Unicorn', 'Studio VOLN', 'Studio Wombat',
            'Studio Zain', 'Studio Zealot', 'Studio Zero', 'Studio! Cucuri', 'StudioAnimal Co.', 'StudioRF Inc.',
            'Sunny Side Up', 'Sunrise', 'Sunwoo Entertainment', 'Suzuki Mirano', 'Synergy Japan', 'SynergySP', 'T-Rex',
            'T.O Entertainment', 'Takahashi Studio', 'Takara', 'Takeshobo', 'TAKI Corporation', 'Tama Production',
            'Tamura Shigeru Studio', 'TAP', 'Tasogare Otome×Amnesia Production Partners', 'Tatsunoko Production', 'TBS',
            'TC Entertainment', 'TCJ', 'teamKG', 'Teichiku Entertainment', 'Tele-Cartoon Japan',
            'Telecom Animation Film', 'Telescreen BV', 'Tencent Comic', 'Tesagure! Production Committee',
            'Test Producer 2', 'Tezuka Productions', 'The Answer Studio', 'The Berich', 'The Klock Worx',
            'The National Film Center Japan', 'The Pokemon Company International', 'The Village of Marchen',
            'Think Corporation', 'Three Fat Samurai', 'Tin House', 'TMS Entertainment', 'TMS-Kyokuchi', 'TNK',
            'Toei Animation', 'Toei Video', 'TOHO animation', 'Toho Company', 'Tohokushinsha Film Corporation',
            'Tokuma Japan', 'Tokuma Shoten', 'Tokyo Animation Film', 'Tokyo Kids', 'Tokyo Media Connections',
            'Tokyo Movie Shinsha', 'Tokyo MX', 'TOKYOPOP', 'Tomason', 'Tomovies', 'Tomoyasu Murata Company',
            'Topcraft', 'Toranoana', 'Toshiba EMI', 'Toshiba Entertainment', 'Toshima Entertainment',
            'Touhouku Shinsha', 'Trans Arts', 'Tri-Slash', 'Triangle Staff', 'Trick Block', 'Trigger',
            'Trilogy Future Studio', 'Trinet Entertainment', 'Trinity Sound', 'Triple X', 'TROYCA',
            'Tsubasa Entertainment', 'Tsubu Doll Production Committee', 'Tsuburaya Productions', 'Tsuchida Productions',
            'tsuritama partners', 'TUBA', 'TV Asahi', 'TV Osaka', 'TV Tokyo', 'TV Tokyo Music', 'TYO Animations',
            'U/M/A/A Inc.', 'Uchouten Kazoku Production Committee', 'ufotable', 'Ultra Super Pictures',
            'UM Productions', 'Union Cho', 'Universal Radio Studio', 'Universal Studios', 'UNLIMITED Partners',
            'Usagi.Ou', 'Valkyria', 'VAP', 'Vasoon Animation', 'Vega Entertainment', 'Venet', 'Venus Vangard',
            'Victor Entertainment', 'View Works', 'Viki', 'Visual 80', 'Visual Art\'s', 'Viz Media', 'Volks',
            'Wako Productions', 'Walt Disney Studios', 'Wao World', 'Warner Bros.', 'Warner Music Japan',
            'Watamote Production Committee', 'WField', 'White Fox', 'Wit Studio', 'Wonder Kids', 'WOWOW', 'Xebec',
            'Xebec Zwei', 'Y.O.U.C', 'Yahoo! Japan', 'Yamamura Animation, Inc.', 'Yamato Works', 'Yellow Film',
            'Yomiko Advertising', 'Yomiuri Advertising', 'Yomiuri Telecasting Corporation', 'Youmex', 'YTV',
            'Yumeta Company', 'ZERO-A', 'Zero-G Room', 'Zexcs', 'ZIZ', 'ZIZ Entertainment', 'Zyc',
        ];

        foreach ($producers as $producer) {
            Producer::firstOrCreate(['name' => $producer, 'active' => 1]);
        }
    }
}
