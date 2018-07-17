import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import request from 'superagent'
import {
  BrowserRouter as Router,
  Route,
  Link
} from 'react-router-dom'

class Payment extends Component {
	constructor (props) {
		super (props)
	}

  render() {
    return (
		<div>
			<table border="1">
				<tr><td>入金履歴を表示するユーザIDをクリックしてください</td></tr>
				<tr><td><li><Link to={"/paymentDetail/" + this.props.match.params.id}>{this.props.match.params.id}</Link></li></td></tr>
			</table>
		</div>
    );
　　}

}

export default Payment;
