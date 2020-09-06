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
    "mailto:filip.milovanovic@project-atlas.at",
    "https://www.linkedin.com/in/milovanovicf/"
);

const MANUEL = new Member(
    "./assets/images/team/manuel.jpeg",
    "Manuel Hummel",
    "Infrastruktur",
    "CORE",
    "mailto:manuel.hummel@project-atlas.at",
    ""
);

const SIMON = new Member(
    "./assets/images/team/simon.jpeg",
    "Simon Griebaum",
    "Virtualisierung",
    "CORE",
    "mailto:simon.griebaum@project-atlas.at",
    ""
);

const NIKI = new Member(
    "./assets/images/team/niki.jpeg",
    "Nikolaus Boyer",
    "Netzwerk",
    "CORE",
    "mailto:nikolaus.boyer@project-atlas.at",
    ""
);

const LEO = new Member(
    "./assets/images/team/leo.jpeg",
    "Leo Sollereder",
    "Web Entwicklung",
    "SPHERE",
    "mailto:leo.sollereder@project-atlas.at",
    "https://www.linkedin.com/in/leo-sollereder-8860a71a7/"
);

const TIM = new Member(
    "./assets/images/team/tim.jpeg",
    "Tim Schreiber",
    "UI / Design",
    "SPHERE",
    "mailto:tim.schreiber@project-atlas.at",
    "https://www.linkedin.com/in/tim-schreiber-b414211b4/"
);

team.push(FILIP, MANUEL, SIMON, NIKI, LEO, TIM);

