class SubcategoriesMap {
    static list = [];
    static dictionary = new Object();

    // Weapons
    static Pistols = new SubcategoriesMap("Pistols", "Weapons", 1);
    static Rifles = new SubcategoriesMap("Rifles", "Weapons", 2);
    static SMGs = new SubcategoriesMap("SMGs", "Weapons", 3);
    static Heavy = new SubcategoriesMap("Heavy", "Weapons", 4);
    static Knives = new SubcategoriesMap("Knives", "Weapons", 5);

    // Transport
    static Cars = new SubcategoriesMap("Cars", "Transport", 6);
    static Motorcycles = new SubcategoriesMap("Motorcycles", "Transport", 7);
    static Panzers = new SubcategoriesMap("Panzers", "Transport", 8);
    static Planes = new SubcategoriesMap("Planes", "Transport", 9);
    static Boats = new SubcategoriesMap("Boats", "Transport", 10);

    // Clothing
    static Jackets = new SubcategoriesMap("Jackets", "Clothing", 11);
    static Shirts = new SubcategoriesMap("Shirts", "Clothing", 12);
    static Pants = new SubcategoriesMap("Pants", "Clothing", 13);
    static Shoes = new SubcategoriesMap("Shoes", "Clothing", 14);
    static Socks = new SubcategoriesMap("Socks", "Clothing", 15);

    // Explosives
    static C4s = new SubcategoriesMap("C4s", "Explosives", 16);
    static Nukes = new SubcategoriesMap("Nukes", "Explosives", 17);
    static Grenades = new SubcategoriesMap("Grenades", "Explosives", 18);
    static TNTs = new SubcategoriesMap("TNTs", "Explosives", 19);
    static Bombs = new SubcategoriesMap("Bombs", "Explosives", 20);

    // Equipment
    static Backpacks = new SubcategoriesMap("Backpacks", "Equipment", 21);
    static Hunting = new SubcategoriesMap("Hunting", "Equipment", 22);
    static Camping = new SubcategoriesMap("Camping", "Equipment", 23);

    // Accessories
    static Glasses = new SubcategoriesMap("Glasses", "Accessories", 24);
    static FacePaint = new SubcategoriesMap("Face paint", "Accessories", 25);
    static Camouflage = new SubcategoriesMap("Camouflage", "Accessories", 26);

    constructor(name, parent, id) {
        if (name) {
            this.name = name;
            this.parent = parent;
            this.id = id;
            SubcategoriesMap.dictionary[name] = this;
            SubcategoriesMap.list.push(this);
        }
    }

    static fromString(name) {
        return SubcategoriesMap.dictionary[name];
    }

    static fromId(id) {
        return SubcategoriesMap.list.find((x) => x.id === id);
    }

    static getFullPathFromId(id) {
        const res = SubcategoriesMap.list.find((x) => x.id === id);
        return res ? `${res.parent}/${res.name}` : "";
    }

    toString() {
        return this.name;
    }

    beforeBind(view) {
        view.overrideContext.ShapeType = ShapeType;
    }
}
