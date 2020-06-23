// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchAlertHistoriesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageBean")]
        [Validation(Required=true)]
        public SearchAlertHistoriesResponsePageBean PageBean { get; set; }
        public class SearchAlertHistoriesResponsePageBean : TeaModel {
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("AlarmHistories")]
            [Validation(Required=true)]
            public List<SearchAlertHistoriesResponsePageBeanAlarmHistories> AlarmHistories { get; set; }
            public class SearchAlertHistoriesResponsePageBeanAlarmHistories : TeaModel {
                    public long Id { get; set; }
                    public string StrategyId { get; set; }
                    public string UserId { get; set; }
                    public string Target { get; set; }
                    public string Phones { get; set; }
                    public string Emails { get; set; }
                    public long AlarmTime { get; set; }
                    public int? AlarmType { get; set; }
                    public int? AlarmResponseCode { get; set; }
                    public string AlarmContent { get; set; }
                    public string AlarmSources { get; set; }
            }
        };

    }

}
