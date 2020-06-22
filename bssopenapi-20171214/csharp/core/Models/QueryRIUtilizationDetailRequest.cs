// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryRIUtilizationDetailRequest : TeaModel {
        [NameInMap("RIInstanceId")]
        [Validation(Required=false)]
        public string RIInstanceId { get; set; }

        [NameInMap("InstanceSpec")]
        [Validation(Required=false)]
        public string InstanceSpec { get; set; }

        [NameInMap("RICommodityCode")]
        [Validation(Required=true)]
        public string RICommodityCode { get; set; }

        [NameInMap("DeductedInstanceId")]
        [Validation(Required=false)]
        public string DeductedInstanceId { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
