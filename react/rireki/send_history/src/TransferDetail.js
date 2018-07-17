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
      .get('/bitflyer/support/transfer/'+id).end((err, res) => {
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
	    <h2>送金履歴画面</h2>
        <header className="App-header">
		  <table border="1">
		    <tr>
			  <td class="list_column_1">No.</td>
			  <td class="list_column_2">決済日付</td>
			  <td class="list_column_3">申込日付</td>
			  <td class="list_column_4">支援対象</td>
			  <td class="list_column_5">金額</td>
			  <td class="list_column_6">仲介</td>
			  <td class="list_column_7">手数料</td>
			  <td class="list_column_8">適用</td>
			</tr>
		  </table>
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
