import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import request from 'superagent'
import {
  BrowserRouter as Router,
  Route,
  Link
} from 'react-router-dom'

class TransferDetail extends Component {
  constructor (props) {
    super (props)
    const v = (this.props.value)
      ? this.props.value : ''
    this.state = {
      value: v,
      items: null
	  
    }
  }
  handleChange (e) {
    const v = e.target.value
    const replaceValue = v.replace(/[\x01-\x7E]/g,'')
                          .replace(/^[^\x01-\x7E]{7,}$/,'')
                          .replace(/[０-９]+$/g,'')
    this.setState({
      value: replaceValue
    })

    if(this.props.onChange) {
      this.props.onChange({
        target: this,
        value: replaceValue
      })
    }
  }
  componentDidMount() {
    this.fetchData(this.props.match.params.id);
  }
  fetchData(id) {
    request
      .get('/bitflyer/support/search/'+id).end((err, res) => {
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
      console.log('JSON読み込みエラー');
      return;
    }
    console.log('JSON読み込み成功');
    this.setState({
      items:res.body
    })
    
  }



  render() {
    if (!this.state.items) {
        return <div> 現在読み込み中</div>
    }
    const results = this.renderStatusMessage()

    return (
      <div className="App">
	    <h2>検索画面</h2>
        <header className="App-header">
		  <form action="javascript:void(0)" onSubmit={this.handleSubmit}>
		    <table border="1">
		      <tr><td>
			    {/* date_time_1 */}
		        <label class="list_column_lbl_01" htmlFor="date_time_1">送金実行日時</label>
			    <input type="text" name="date_time_1" value={this.state.date_time_1} onChange={this.handleChange} />
			  
			    {/* date_time_2 */}
  		        <label class="list_column_lbl_02" htmlFor="date_time_2">入金解決日時</label>
			    <input type="text" name="date_time_2" value={this.state.date_time_2} onChange={this.handleChange} />

			    {/* user_id_from */}
		        <label class="list_column_lbl_03" htmlFor="user_id_from">送金者（もしくは入金者）</label>
			    <input type="text" name="user_id_from" value={this.state.user_id_from} onChange={this.handleChange} />

			    {/* user_id_to */}
		        <label class="list_column_lbl_04" htmlFor="user_id_to">入金者（もしくは出金者）</label>
			    <input type="text" name="user_id_to" value={this.state.user_id_to} onChange={this.handleChange} />

			    {/* amount1 */}
		        <label class="list_column_lbl_05" htmlFor="amount1">出金</label>
			    <input type="text" name="amount1" value={this.state.amount1} onChange={this.handleChange} />

			    {/* amount2 */}
		        <label class="list_column_lbl_06" htmlFor="amount2">入金</label>
			    <input type="text" name="amount2" value={this.state.amount2} onChange={this.handleChange} />

			    {/* description */}
		        <label class="list_column_lbl_07" htmlFor="description">摘要</label>
			    <input type="text" name="description" value={this.state.description} onChange={this.handleChange} />

			    {/* apikey */}
		        <label class="list_column_lbl_08" htmlFor="apikey">apikey</label>
			    <input type="text" name="apikey" value={this.state.apikey} onChange={this.handleChange} />

			    {/* shop_id */}
		        <label class="list_column_lbl_09" htmlFor="shop_id">shop_id</label>
			    <input type="text" name="shop_id" value={this.state.shop_id} onChange={this.handleChange} />

			    {/* email */}
		        <label class="list_column_lbl_10" htmlFor="email">email</label>
			    <input type="text" name="email" value={this.state.email} onChange={this.handleChange} />

			    {/* account_id */}
		        <label class="list_column_lbl_11" htmlFor="account_id">account_id</label>
			    <input type="text" name="account_id" value={this.state.account_id} onChange={this.handleChange} />

			    {/* amount */}
		        <label class="list_column_lbl_12" htmlFor="amount">amount</label>
			    <input type="text" name="amount" value={this.state.amount} onChange={this.handleChange} />

			    {/* auto_charge */}
		        <label class="list_column_lbl_13" htmlFor="auto_charge">auto_charge</label>
			    <input type="text" name="auto_charge" value={this.state.auto_charge} onChange={this.handleChange} />

			    {/* name */}
		        <label class="list_column_lbl_14" htmlFor="name">name</label>
			    <input type="text" name="name" value={this.state.name} onChange={this.handleChange} />

			    {/* external_transaction_id */}
		        <label class="list_column_lbl_15" htmlFor="external_transaction_id">external_transaction_id</label>
			    <input type="text" name="external_transaction_id" value={this.state.external_transaction_id} onChange={this.handleChange} />

			    {/* status */}
		        <label class="list_column_lbl_16" htmlFor="status">status</label>
			    <input type="text" name="status" value={this.state.status} onChange={this.handleChange} />

			    {/* tracking_id */}
		        <label class="list_column_lbl_17" htmlFor="tracking_id">tracking_id</label>
			    <input type="text" name="tracking_id" value={this.state.tracking_id} onChange={this.handleChange} />

			    {/* auto_charge_price */}
 		        <label class="list_column_lbl_18" htmlFor="auto_charge_price">auto_charge_price</label>
			    <input type="text" name="auto_charge_price" value={this.state.auto_charge_price} onChange={this.handleChange} />

			    {/* mid */}
		        <label class="list_column_lbl_19" htmlFor="mid">mid</label>
			    <input type="text" name="mid" value={this.state.mid} onChange={this.handleChange} />

			    {/* ask */}
		        <label class="list_column_lbl_20" htmlFor="ask">ask</label>
			    <input type="text" name="ask" value={this.state.ask} onChange={this.handleChange} />

			    {/* bid */}
		        <label class="list_column_lbl_21" htmlFor="bid">bid</label>
			    <input type="text" name="bid" value={this.state.bid} onChange={this.handleChange} />

			    {/* option0 */}
		        <label class="list_column_lbl_22" htmlFor="option0">option0</label>
			    <input type="text" name="option0" value={this.state.option0} onChange={this.handleChange} />

			  </td></tr>
		    </table>
			{/* Submit Button */}
            <button type="submit">送信</button>
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
                     .map(item => <tr>
        <td class="list_column_value_1">{item.no}</td>
        <td class="list_column_value_2">{item.date1}</td>
        <td class="list_column_value_3">{item.date2}</td>
        <td class="list_column_value_4">{item.npo_or_person}</td>
		<td class="list_column_value_5">{item.amount}</td>
		<td class="list_column_value_6">{item.intermediary}</td>
		<td class="list_column_value_7">{item.hand_counting_material}</td>
		<td class="list_column_value_8">{item.suitable_for}</td></tr>)
      
      results = <div>{preinfo}</div>
     
      return results
    }

}

export default TransferDetail;
