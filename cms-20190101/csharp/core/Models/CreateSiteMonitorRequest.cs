// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class CreateSiteMonitorRequest : TeaModel {
        [NameInMap("Address")]
        [Validation(Required=true)]
        public string Address { get; set; }

        [NameInMap("TaskType")]
        [Validation(Required=true)]
        public string TaskType { get; set; }

        [NameInMap("TaskName")]
        [Validation(Required=true)]
        public string TaskName { get; set; }

        [NameInMap("Interval")]
        [Validation(Required=false)]
        public string Interval { get; set; }

        [NameInMap("IspCities")]
        [Validation(Required=false)]
        public string IspCities { get; set; }

        [NameInMap("OptionsJson")]
        [Validation(Required=false)]
        public string OptionsJson { get; set; }

        [NameInMap("AlertIds")]
        [Validation(Required=false)]
        public string AlertIds { get; set; }

    }

}
