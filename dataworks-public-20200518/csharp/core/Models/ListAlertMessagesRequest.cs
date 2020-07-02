// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListAlertMessagesRequest : TeaModel {
        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("BeginTime")]
        [Validation(Required=true)]
        public string BeginTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("RemindId")]
        [Validation(Required=false)]
        public long RemindId { get; set; }

        [NameInMap("AlertMethods")]
        [Validation(Required=false)]
        public string AlertMethods { get; set; }

        [NameInMap("AlertUser")]
        [Validation(Required=false)]
        public string AlertUser { get; set; }

        [NameInMap("AlertRuleTypes")]
        [Validation(Required=false)]
        public string AlertRuleTypes { get; set; }

    }

}
