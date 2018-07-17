import React, { Component } from 'react';
import { Switch, Route } from 'react-router-dom';
import Home from './Home';
import Transfer from './Transfer';
import TransferDetail from './TransferDetail';
import Payment from './Payment';
import PaymentDetail from './PaymentDetail';

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
					<Route path="/transfer/:id" component={Transfer}/>
					<Route path="/payment/:id" component={Payment}/>
					<Route path="/transferDetail/:id" component={TransferDetail}/>
					<Route path="/paymentDetail/:id" component={PaymentDetail}/>
					<Route path="/" render={props => <Home updateState={this.updateState} {...props}/>} />
				</Switch>
			</main>
		)
	}
}
export default Main;