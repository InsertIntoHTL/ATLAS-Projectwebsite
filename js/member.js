class Member {
    constructor(img, name, role, team, link1, link2){
        this._img = img;
        this._name = name;
        this._role = role;
        this._team = team; 
        this._link1 = link1;
        this._link2 = link2;
    }

    get img(){
        return this._img;
    }

    get name(){
        return this._name;
    }

    get role(){
        return this._role;
    }

    get team(){
        return this._team;
    }

    get link1(){
        return this._link1;
    }

    get link2(){
        return this._link2;
    }
}


var team = [];

const FILIP = new Member(
    "./assets/images/team/filip.jpeg",
    "Filip Milovanovic",
    "Scrum Master",
    "CORE",
    "",
    ""
);

const MANUEL = new Member(
    "./assets/images/team/manuel.jpeg",
    "Manuel Hummel",
    "Infrastruktur",
    "CORE",
    "",
    ""
);

const SIMON = new Member(
    "./assets/images/team/simon.jpeg",
    "Simon Griebaum",
    "Virtualisierung",
    "CORE",
    "",
    ""
);

const NIKI = new Member(
    "./assets/images/team/niki.jpeg",
    "Nikolaus Boyer",
    "Netzwerk",
    "CORE",
    "",
    ""
);

const LEO = new Member(
    "./assets/images/team/leo.jpeg",
    "Leo Sollereder",
    "Web Entwicklung",
    "SPHERE",
    "",
    ""
);

const TIM = new Member(
    "./assets/images/team/tim.jpeg",
    "Tim Schreiber",
    "UI / Design",
    "SPHERE",
    "",
    ""
);

team.push(FILIP, MANUEL, SIMON, NIKI, LEO, TIM);

