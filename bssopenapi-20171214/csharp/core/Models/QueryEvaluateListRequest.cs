// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryEvaluateListRequest : TeaModel {
        [NameInMap("Type")]
        [Validation(Required=false)]
        public int? Type { get; set; }

        [NameInMap("OutBizId")]
        [Validation(Required=false)]
        public string OutBizId { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("StartAmount")]
        [Validation(Required=false)]
        public long StartAmount { get; set; }

        [NameInMap("EndAmount")]
        [Validation(Required=false)]
        public long EndAmount { get; set; }

        [NameInMap("StartBizTime")]
        [Validation(Required=false)]
        public string StartBizTime { get; set; }

        [NameInMap("EndBizTime")]
        [Validation(Required=false)]
        public string EndBizTime { get; set; }

        [NameInMap("SortType")]
        [Validation(Required=false)]
        public int? SortType { get; set; }

        [NameInMap("StartSearchTime")]
        [Validation(Required=false)]
        public string StartSearchTime { get; set; }

        [NameInMap("EndSearchTime")]
        [Validation(Required=false)]
        public string EndSearchTime { get; set; }

        [NameInMap("BillCycle")]
        [Validation(Required=false)]
        public string BillCycle { get; set; }

        [NameInMap("BizTypeList")]
        [Validation(Required=false)]
        public List<string> BizTypeList { get; set; }

    }

}
