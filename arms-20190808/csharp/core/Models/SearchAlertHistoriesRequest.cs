// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchAlertHistoriesRequest : TeaModel {
        [NameInMap("ProxyUserId")]
        [Validation(Required=false)]
        public string ProxyUserId { get; set; }

        [NameInMap("AlertId")]
        [Validation(Required=false)]
        public long AlertId { get; set; }

        [NameInMap("AlertType")]
        [Validation(Required=false)]
        public int? AlertType { get; set; }

        [NameInMap("CurrentPage")]
        [Validation(Required=false)]
        public int? CurrentPage { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=false)]
        public long StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=false)]
        public long EndTime { get; set; }

    }

}
