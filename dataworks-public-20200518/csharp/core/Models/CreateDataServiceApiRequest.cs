// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class CreateDataServiceApiRequest : TeaModel {
        [NameInMap("TenantId")]
        [Validation(Required=true)]
        public long TenantId { get; set; }

        [NameInMap("ProjectId")]
        [Validation(Required=true)]
        public long ProjectId { get; set; }

        [NameInMap("ApiName")]
        [Validation(Required=true)]
        public string ApiName { get; set; }

        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public string GroupId { get; set; }

        [NameInMap("ApiMode")]
        [Validation(Required=true)]
        public int? ApiMode { get; set; }

        [NameInMap("RequestMethod")]
        [Validation(Required=true)]
        public int? RequestMethod { get; set; }

        [NameInMap("ResponseContentType")]
        [Validation(Required=true)]
        public int? ResponseContentType { get; set; }

        [NameInMap("Timeout")]
        [Validation(Required=true)]
        public int? Timeout { get; set; }

        [NameInMap("VisibleRange")]
        [Validation(Required=true)]
        public int? VisibleRange { get; set; }

        [NameInMap("Protocols")]
        [Validation(Required=true)]
        public string Protocols { get; set; }

        [NameInMap("WizardDetails")]
        [Validation(Required=false)]
        public string WizardDetails { get; set; }

        [NameInMap("ScriptDetails")]
        [Validation(Required=false)]
        public string ScriptDetails { get; set; }

        [NameInMap("RegistrationDetails")]
        [Validation(Required=false)]
        public string RegistrationDetails { get; set; }

        [NameInMap("ApiPath")]
        [Validation(Required=true)]
        public string ApiPath { get; set; }

        [NameInMap("ApiDescription")]
        [Validation(Required=true)]
        public string ApiDescription { get; set; }

    }

}
