import React, { Component } from 'react';
import { Switch, Route } from 'react-router-dom';
import Home from './Home';
import Mentenance_Search from './Mentenance_Search';
import Mentenance_Regist from './Mentenance_Regist';
import Mentenance_Update from './Mentenance_Update';
import Mentenance_Delete from './Mentenance_Delete';

class Main extends React.Component {
	constructor (props) {
		super (props)
		this.updateState = this.updateState.bind(this)
	}
	updateState(id, url) {
		//親コンポーネントを更新
		this.props.updateState(id, url);
	}
	render() {
		return (
			<main>
				<Switch>
					<Route exact path="/home" render={props => <Home updateState={this.updateState} {...props}/>} />
					<Route path="/search/:id" component={Mentenance_Search}/>
					<Route path="/regist/:id" component={Mentenance_Regist}/>
					<Route path="/update/:id" component={Mentenance_Update}/>
					<Route path="/delete/:id" component={Mentenance_Delete}/>
					<Route path="/" render={props => <Home updateState={this.updateState} {...props}/>} />
				</Switch>
			</main>
		)
	}
}
export default Main;