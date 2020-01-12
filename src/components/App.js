import React from 'react';
import Tabela from './Tabela';

export default class App extends React.Component{

    constructor(){
        super();
        this.state=({
            db:[]
        });
        this.exibirCarros();
    }
    exibirCarros(){
        fetch("http://localhost/react/reactjs/reactphp/carros/src/api/")
        .then((response)=>response.json())
        .then((responseJson)=>{
            this.setState({
                db: responseJson
            });
        })
    }
    render(){
        return(
            <div>
                <Tabela arrayCarros={this.state.db} />
            </div>
        );
    }
}