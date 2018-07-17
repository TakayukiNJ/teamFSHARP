import React, { Component } from 'react';
import { Switch, Route } from 'react-router-dom';
import Header from './Header';
import Main from './Main';

class App extends Component {
	constructor (props) {
		super (props)
		this.state = {
			value_id: '',
			value_url: '',
		}
		this.updateState = this.updateState.bind(this)
	}
	updateState(id, url) {
		this.setState({ value_id: id });
		this.setState({ value_url: url });
	}

	render() {
		const ref = document.referrer
		console.log("App.js ref[" + ref + "]");
		console.log("this.state.value_url[" + this.state.value_url + "]");
		console.log("this.state.value_id[" + this.state.value_id + "]");
		if(this.state.value_url != '' && this.state.value_id != '') {
			if(this.state.value_url != ref && this.state.value_id != '23456') {
				return <div>auth error</div>;
			}
		}
		return (
			<div>
				<Header data={this.state.value_id}/>
				<Main   data={this.state.value_id} updateState={this.updateState}/>
			</div>
		)
	}
}
export default App;