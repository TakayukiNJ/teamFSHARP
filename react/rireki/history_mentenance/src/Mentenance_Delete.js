import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import request from 'superagent'
import {
  BrowserRouter as Router,
  Route,
  Link
} from 'react-router-dom'

class Mentenance_Delete extends Component {
  constructor (props) {
    super (props)
    this.state = {
      items: null,
	  already_search: false,
	  data: null
	}
	
	this.state.data = {
		no: '',
		date_time_1: '',
		date_time_2: '',
		user_id_from: '',
		user_id_to: '',
		amount1: '',
		amount2: '',
		description: '',
		apikey: '',
		shop_id: '',
		email: '',
		account_id: '',
		amount: '',
		auto_charge: '',
		name: '',
		external_transaction_id: '',
		status: '',
		tracking_id: '',
		auto_charge_price: '',
		mid: '',
		ask: '',
		bid: '',
		option0: ''
    }
	
	this.handleChange = this.handleChange.bind(this)
	this.handleSubmit = this.handleSubmit.bind(this)
  }

  fetchData(id) {
    request
      .get('/bitflyer/support/mentenance_delete/'+id).end((err, res) => {
		if (res) {
			if (res.text !== "") {
				console.log(res.body);
		        this.loadedJSON(err, res);
			}
		} else {
			console.log("resがnull");
		}
      })
  }

  componentWillReceiveProps (nextProps) {
    this.setState({
      value: nextProps.value
    })
  }

  loadedJSON (err, res) {
    if (err) {
      return;
    }
    this.setState({
      items:res.body
    })
  }

  handleChange (event) {
    var data = this.state.data;

    // eventが発火したname属性名ごとに値を処理
    switch (event.target.name) {
      case 'no':
        data.no = event.target.value;
        break;
    }

    // 状態を更新
    this.setState({
      data: data
    });
  }
	
  handleSubmit() {
    this.setState({
      items: [{
	    no: 1,
		date_time_1: "20180924120000"
	  }]
    })

    this.setState({
      already_search: true
    });
  }

  render() {
	var results
	if (this.state.already_search) {
		if (!this.state.items) {
			return <div> 現在読み込み中</div>
		}
		results = this.renderStatusMessage()
	} else {
		const results = "";
	}

    return (
      <div className="App">
	    <h2>削除画面</h2>
        <header className="App-header">
		  <form action="javascript:void(0)" onSubmit={this.handleSubmit}>
		    <table border="1">
		      <tr><td>
			    {/* no */}
		        <label class="list_column_lbl_01" htmlFor="no">No.</label>
			    <input type="text" name="no" value={this.state.no} onChange={this.handleChange} />
  			  </td></tr>
			</table>
			{/* Submit Button */}
            <button type="submit">確認</button>
		  </form>
		  <table border="1">
            {results}
		  </table>
        </header>
      </div>
    );
  }
      renderStatusMessage () {
      let results = null
      const preinfo = this.state.items
                     .map(item => <table border="2" key={item}>
		      <tr><td>送金実行日時{item.date_time_1}</td></tr>
		      <tr><td>入金解決日時{item.date_time_2}</td></tr>
		      <tr><td>送金者（もしくは入金者）{item.user_id_from}</td></tr>
		      <tr><td>
		        入金者（もしくは出金者）
			    {item.user_id_to}
  			  </td></tr>
		      <tr><td>
		        出金
			    {item.amount1}
  			  </td></tr>
		      <tr><td>
		        入金
			    {item.amount2}
  			  </td></tr>
		      <tr><td>
		        摘要
			    {item.description}
  			  </td></tr>
		      <tr><td>
		        apikey
			    {item.apikey}
  			  </td></tr>
		      <tr><td>
		        shop_id
			    {item.shop_id}
  			  </td></tr>
		      <tr><td>
		        email
			    {item.email}
  			  </td></tr>
		      <tr><td>
		        account_id
			    {item.account_id}
  			  </td></tr>
		      <tr><td>
		        amount
			    {item.amount}
  			  </td></tr>
		      <tr><td>
		        auto_charge
			    {item.auto_charge}
  			  </td></tr>
		      <tr><td>
		        name
			    {item.name}
  			  </td></tr>
		      <tr><td>
		        external_transaction_id
			    {this.state.external_transaction_id}
  			  </td></tr>
		      <tr><td>
		        status
			    {this.state.status}
  			  </td></tr>
		      <tr><td>
		        tracking_id
			    {this.state.tracking_id}
  			  </td></tr>
		      <tr><td>
 		        auto_charge_price
			    {this.state.auto_charge_price}
  			  </td></tr>
		      <tr><td>
		        mid
			    {this.state.mid}
  			  </td></tr>
		      <tr><td>
		        ask
			    {this.state.ask}
  			  </td></tr>
		      <tr><td>
		        bid
			    {this.state.bid}
  			  </td></tr>
		      <tr><td>
		        option0
			    {this.state.option0}
			  </td></tr></table>
		  )

      
      results = <form action="javascript:void(0)" onSubmit={this.handleDeleteSubmit}>{preinfo}<button type="submit">削除実行</button></form>
     
      return results
    }

}

export default Mentenance_Delete;
