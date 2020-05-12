// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class GetUpgradeStatusResponseBody : TeaModel {
        [NameInMap("status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("precheck_report_id")]
        [Validation(Required=true)]
        public string PrecheckReportId { get; set; }

        [NameInMap("upgrade_step")]
        [Validation(Required=true)]
        public string UpgradeStep { get; set; }

        [NameInMap("error_message")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

    }

}
